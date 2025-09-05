using Info.Subscription.Dotnet;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using Microsoft.Extensions.Logging;

var builder = Host.CreateDefaultBuilder() // The default builder adds loading of appsettings.json, appsettings.{env}.json, env vars, command line args, and default logging (console, debug, event source)
           .ConfigureServices((ctx, services) =>
           {
               services.AddHostedService<Worker>();
               services.AddOptions();
               services.AddInfoSubscription(ctx.Configuration);
           });

await builder.Build().RunAsync();

Console.WriteLine("Pres any key to terminate");
Console.Read();


public class Worker : IHostedService
{
    private readonly InfoSubscription client;
    private readonly IHostApplicationLifetime hostLifetime;
    private readonly ILogger<Worker> logger;

    public Worker(InfoSubscription client, IHostApplicationLifetime hostLifetime, ILogger<Worker> logger)
    {
        this.client = client;
        this.hostLifetime = hostLifetime;
        this.logger = logger;
    }
    public async Task StartAsync(CancellationToken cancellationToken)
    {
        this.logger.LogInformation("Querying InfoSubscription API...");
        var products = await this.client.Product.GetAsync(cancellationToken: cancellationToken);
        if (products == null)
        {
            Console.WriteLine("No products found");
            return;
        }

        foreach(var item in products)
        {
            Console.WriteLine($"Product: {item.Name} ({item.Id})");
        }
        this.hostLifetime.StopApplication();
    }

    public Task StopAsync(CancellationToken cancellationToken)
    {
        this.logger.LogInformation("Stopping host");
        return Task.CompletedTask;
    }
}
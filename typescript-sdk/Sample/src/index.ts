import 'dotenv/config';
import { createInfoSubscriptionClient } from '../../src/index.ts';

function requireEnv(name: string): string {
  const value = process.env[name];
  if (!value) {
    throw new Error(`Missing required environment variable: ${name}`);
  }

  return value;
}

async function main(): Promise<void> {
  const client = createInfoSubscriptionClient({
    apiEndpoint: process.env.API_ENDPOINT,
    tenantId: requireEnv('TENANT_ID'),
    auth: {
      clientId: requireEnv('CLIENT_ID'),
      clientSecret: requireEnv('CLIENT_SECRET'),
      b2cTenantName: requireEnv('B2C_TENANT_NAME'),
    },
  });

  const products = await client.product.get();

  if (!products || products.length === 0) {
    console.log('No products found.');
  } else {
    console.log(`Found ${products.length} product(s):\n`);
    console.table(products);
  }

  const packages = await client.packageEscaped.get();

  if (!packages || packages.length === 0) {
    console.log('\nNo packages found.');
  } else {
    console.log(`\nFound ${packages.length} package(s):\n`);
    console.table(packages);
  }
}

main().catch((error: unknown) => {
  console.error('Failed to list products:');
  console.error(error instanceof Error ? error.message : error);
  process.exitCode = 1;
});

# PHP SDK sample

Read-only CLI sample that lists the first page of products and packages from INFO-Subscription.

## Configure

From the repository root, install the SDK dependencies, then copy the example environment file:

```powershell
composer install
Copy-Item php-sdk/Sample/.env.example php-sdk/Sample/.env
```

Set `TENANT_ID`, `CLIENT_ID`, and `CLIENT_SECRET` in `php-sdk/Sample/.env`. These values are required. The sample reports missing variable names and exits with code `1` without displaying credential values.

Optional variables:

- `B2C_TENANT_NAME` — defaults to `prodlogins4`
- `SIGN_IN_POLICY` — defaults to `B2C_1A_V2SIGNIN`
- `SCOPE_NAME` — defaults to `api`
- `API_ENDPOINT` — defaults to `https://api.info-subscription.com`

## Run

From the repository root:

```powershell
docker compose -f php-sdk/compose.yml run --rm sample php index.php
```

Live execution requires valid credentials and makes read-only API requests. The sample does not create, update, or delete API data.

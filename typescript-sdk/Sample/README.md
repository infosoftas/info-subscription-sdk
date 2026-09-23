# TypeScript SDK sample

This sample mirrors the .NET console application in `dotnet-sdk/Sample` and prints the first page of products and packages from the INFO-Subscription API.

It depends on the local SDK package in this repo via `file:..`, so the sample installs the required SDK runtime dependencies without becoming part of the published npm package.

## Setup

1. Open a terminal in `typescript-sdk/Sample`.
2. Install the sample dependencies:
   ```powershell
   npm install
   ```
3. Copy `.env.example` to `.env` and fill in the required values:
   ```powershell
   Copy-Item .env.example .env
   ```

Required values:
- `TENANT_ID` — your INFO-Subscription tenant GUID
- `CLIENT_ID` — Azure AD B2C application (client) ID
- `CLIENT_SECRET` — Azure AD B2C client secret
- `B2C_TENANT_NAME` — Azure AD B2C tenant name (for example `mycompany`)

Optional:
- `API_ENDPOINT` — defaults to `https://api.info-subscription.com`

## Run

```powershell
npm start
```

This app intentionally lives in `typescript-sdk/Sample` instead of `typescript-sdk/src`. It is excluded from the npm package because the published package only includes `dist` and `src` via `typescript-sdk/package.json`.

/** Options for configuring the InfoSubscription SDK client. */
export interface InfoSubscriptionSettings {
  /**
   * API base URL.
   * @default "https://api.info-subscription.com"
   */
  apiEndpoint?: string;

  /**
   * Tenant GUID, sent as the `S4-TenantId` request header on every request.
   */
  tenantId: string;

  /** Azure AD B2C application credentials for machine-to-machine authentication. */
  auth: {
    /** Azure AD B2C application (client) ID. */
    clientId: string;

    /** Azure AD B2C client secret. */
    clientSecret: string;

    /**
     * Azure AD B2C tenant name (e.g. `"mycompany"` for `mycompany.b2clogin.com`).
     */
    b2cTenantName: string;

    /**
     * B2C sign-in policy name.
     * @default "B2C_1A_V2SIGNIN"
     */
    signInPolicy?: string;

    /**
     * API scope name.
     * @default "api"
     */
    scopeName?: string;
  };
}

import { AllowedHostsValidator, type AccessTokenProvider } from '@microsoft/kiota-abstractions';
import { type ConfidentialClientApplication } from '@azure/msal-node';

/**
 * Kiota AccessTokenProvider that acquires tokens via an MSAL ConfidentialClientApplication.
 * Mirrors the .NET ConfidentialClientAuthenticationProvider.
 */
export class ConfidentialClientAuthenticationProvider implements AccessTokenProvider {
  private readonly _allowedHostsValidator: AllowedHostsValidator;

  constructor(
    private readonly tokenClient: ConfidentialClientApplication,
    private readonly scopes: string[],
  ) {
    this._allowedHostsValidator = new AllowedHostsValidator();
  }

  getAuthorizationToken = async (
    _url?: string,
    _additionalAuthenticationContext?: Record<string, unknown>,
  ): Promise<string> => {
    const result = await this.tokenClient.acquireTokenByClientCredential({ scopes: this.scopes });
    if (!result?.accessToken) {
      throw new Error('Failed to acquire access token from Azure AD B2C.');
    }
    return result.accessToken;
  };

  getAllowedHostsValidator = (): AllowedHostsValidator => this._allowedHostsValidator;
}

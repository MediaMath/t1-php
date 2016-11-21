## Usage <a name="usage"></a>

- [Overview](#overview)
- [Setting up the SDK](setting-up.md)
- [Reading from the API](reading.md)
- [Querying and Limiting](querying-and-limiting.md)
- [Fetching Full Objects](fetching-full-objects.md)
- [Creating, Updating, Deleting](creating-updating-deleting-objects.md)
- [Decoding The Response](decoding.md)
- [Caching The Response](caching.md)
- [Pagination](pagination.md)
- [Overriding api host and version](overriding-api-host-and-version.md)

### Overview <a name="overview"></a>

#### The SDK structure is as follows:

1. Authenticator - allows you to authenticate against the T1 API either using adama, username / password, or OAuth
2. HTTP Transporter - choose how you want your network traffic to be handled, eg cURL, Guzzle, AMQP, or a mixture of options (such as AMQP for updating data, cURL for reading)
3. API Client - allows you to hook in any custom request / response logic and / or perform response caching
4. API Object class - holds information about each API endpoint
5. Decoder - allows you to format the API response in any way you wish

#### The SDK flow is as follows:

1. Choose an authentication method
2. Set up an HTTP transporter to use your authenticator
3. Set up an API Client
4. Make your API call by instantiating one of the provided API object classes with your API Client
5. Do something with the response (decode it, return a string representation, etc)

### Using the API response

The `ApiClient` and `CachingApiClient` classes will return an instance of `ApiResponse`, which in turn gives you access to the response's meta information and the actual data, by use of the `meta()` and `data()` methods.

# YouTube checker

This little app will check if a video or a (public) playlist exists.
Returning a data array with a status and either the data that we
optained from the API call or false.

### Install
1. Get this source
2. ```composer install```
3. Get a key for the YouTube API at [https://console.developers.google.com](https://console.developers.google.com)
4. Add ```GOOGLE_API_KEY=YOURSUPERKEY``` to you ```.env``` file
5. Add ```SITE-TOKEN=SITETOKEN``` to you ```.env``` file (to prevent unathorized access)

#### Notes
- Far from perfect, but it does the job

#### TODOS
- Extract to service
- Implement in API
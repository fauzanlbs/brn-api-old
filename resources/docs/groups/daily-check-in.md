# Daily Check in


## Check in hari ini.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/check-in" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/check-in"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://brn-api.test/api/check-in',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

{
 "message": "Berhasil check in hari ini.",
}
```
<div id="execution-results-GETapi-check-in" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-check-in"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-check-in"></code></pre>
</div>
<div id="execution-error-GETapi-check-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-check-in"></code></pre>
</div>
<form id="form-GETapi-check-in" data-method="GET" data-path="api/check-in" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-check-in', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-check-in" onclick="tryItOut('GETapi-check-in');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-check-in" onclick="cancelTryOut('GETapi-check-in');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-check-in" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/check-in</code></b>
</p>
<p>
<label id="auth-GETapi-check-in" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-check-in" data-component="header"></label>
</p>
</form>




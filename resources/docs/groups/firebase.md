# Firebase


## Memperbaharui device token.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/firebase/device-token" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"device_token":"cSN1fH..."}'

```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/firebase/device-token"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "device_token": "cSN1fH..."
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://api-brn.neosantara.co.id/api/firebase/device-token',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'device_token' => 'cSN1fH...',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

{
 "message": "Berhasil memperbaharui device token.",
}
```
<div id="execution-results-POSTapi-firebase-device-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-firebase-device-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-firebase-device-token"></code></pre>
</div>
<div id="execution-error-POSTapi-firebase-device-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-firebase-device-token"></code></pre>
</div>
<form id="form-POSTapi-firebase-device-token" data-method="POST" data-path="api/firebase/device-token" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-firebase-device-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-firebase-device-token" onclick="tryItOut('POSTapi-firebase-device-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-firebase-device-token" onclick="cancelTryOut('POSTapi-firebase-device-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-firebase-device-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/firebase/device-token</code></b>
</p>
<p>
<label id="auth-POSTapi-firebase-device-token" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-firebase-device-token" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>device_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="device_token" data-endpoint="POSTapi-firebase-device-token" data-component="body" required  hidden>
<br>
device token.
</p>

</form>




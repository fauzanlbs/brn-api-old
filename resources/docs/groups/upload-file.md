# Upload File


## Upload File




> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/upload-files" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"key":"secret","files":[[],[]]}'

```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/upload-files"
);

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "key": "secret",
    "files": [
        [],
        []
    ]
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
    'https://api-brn.neosantara.co.id/api/upload-files',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'key' => 'secret',
            'files' => [
                [],
                [],
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "files.0": [
            "Files.0 wajib diisi."
        ],
        "files.1": [
            "Files.1 wajib diisi."
        ]
    }
}
```
<div id="execution-results-POSTapi-upload-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-upload-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-upload-files"></code></pre>
</div>
<div id="execution-error-POSTapi-upload-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-upload-files"></code></pre>
</div>
<form id="form-POSTapi-upload-files" data-method="POST" data-path="api/upload-files" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-upload-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-upload-files" onclick="tryItOut('POSTapi-upload-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-upload-files" onclick="cancelTryOut('POSTapi-upload-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-upload-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/upload-files</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="POSTapi-upload-files" data-component="body" required  hidden>
<br>
upload file key.
</p>
<p>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<input type="text" name="files.0" data-endpoint="POSTapi-upload-files" data-component="body" required  hidden>
<input type="text" name="files.1" data-endpoint="POSTapi-upload-files" data-component="body" hidden>
<br>
List file.
</p>

</form>




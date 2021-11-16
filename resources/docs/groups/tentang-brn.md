# Tentang BRN


## Mendapatkan data tentang BRN.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/about" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/about"
);

let headers = {
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
    'https://api-brn.neosantara.co.id/api/about',
    [
        'headers' => [
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
    "id": 1,
    "title": "title",
    "vesion_app": "1.0.0",
    "copyright": "copyright",
    "histories": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "organizational_regulations": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "tujuh_sapta_cipta": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "adarts": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "organizational_structures": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "playstore_url_app": "https:\/\/playsotre......",
    "created_at": "2021-05-03T12:13:34.000000Z",
    "updated_at": "2021-05-03T12:13:34.000000Z"
}
```
<div id="execution-results-GETapi-about" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-about"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-about"></code></pre>
</div>
<div id="execution-error-GETapi-about" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-about"></code></pre>
</div>
<form id="form-GETapi-about" data-method="GET" data-path="api/about" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-about', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-about" onclick="tryItOut('GETapi-about');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-about" onclick="cancelTryOut('GETapi-about');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-about" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/about</code></b>
</p>
</form>




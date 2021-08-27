# Slider


## Mendapatkan list data slider yang tersedia.




> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/sliders?search=Jawa+Barat&page[number]=1&page[size]=2&sort=created_at&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/sliders"
);

let params = {
    "search": "Jawa Barat",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/sliders',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Jawa Barat',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[created_at]'=> '2020-12-24',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/sliders?search=Jawa%20Barat&page%5Bsize%5D=2&sort=created_at&filter%5Bcreated_at%5D=2020-12-24&key=value&page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "path": "http:\/\/localhost\/api\/sliders",
        "per_page": 10,
        "to": null
    }
}
```
<div id="execution-results-GETapi-sliders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-sliders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sliders"></code></pre>
</div>
<div id="execution-error-GETapi-sliders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sliders"></code></pre>
</div>
<form id="form-GETapi-sliders" data-method="GET" data-path="api/sliders" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-sliders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-sliders" onclick="tryItOut('GETapi-sliders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-sliders" onclick="cancelTryOut('GETapi-sliders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-sliders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/sliders</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-sliders" data-component="query"  hidden>
<br>
Mencari data slider.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-sliders" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-sliders" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-sliders" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-sliders" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>




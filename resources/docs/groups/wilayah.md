# Wilayah


## Mendapatkan list data wilayah yang tersedia.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/regions?search=Jawa+Barat&page[number]=1&page[size]=2&sort=created_at&filter[region]=Jawa+Barat&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/regions"
);

let params = {
    "search": "Jawa Barat",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[region]": "Jawa Barat",
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
    'https://api-brn.neosantara.co.id/api/regions',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Jawa Barat',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[region]'=> 'Jawa Barat',
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
    "data": [
        {
            "id": 1,
            "region": "Jawa Barat",
            "created_at": "2021-07-01T14:26:40.000000Z",
            "updated_at": "2021-07-01T14:26:40.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/regions?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/regions",
        "per_page": 15,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-regions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions"></code></pre>
</div>
<div id="execution-error-GETapi-regions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions"></code></pre>
</div>
<form id="form-GETapi-regions" data-method="GET" data-path="api/regions" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions" onclick="tryItOut('GETapi-regions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions" onclick="cancelTryOut('GETapi-regions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Mencari data wilayah.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[region]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[region]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nana wilayah.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan list data area berdasarkan region yang dipilih.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/regions/1/areas?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/regions/1/areas"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
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
    'https://api-brn.neosantara.co.id/api/regions/1/areas',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'page[number]'=> '1',
            'page[size]'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "region_id": 1,
            "area": "Tasikmalaya",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        },
        {
            "id": 2,
            "region_id": 1,
            "area": "Bandung",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/regions\/1\/areas?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/regions\/1\/areas",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-regions--region--areas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions--region--areas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions--region--areas"></code></pre>
</div>
<div id="execution-error-GETapi-regions--region--areas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions--region--areas"></code></pre>
</div>
<form id="form-GETapi-regions--region--areas" data-method="GET" data-path="api/regions/{region}/areas" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions--region--areas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions--region--areas" onclick="tryItOut('GETapi-regions--region--areas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions--region--areas" onclick="cancelTryOut('GETapi-regions--region--areas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions--region--areas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions/{region}/areas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="region" data-endpoint="GETapi-regions--region--areas" data-component="url" required  hidden>
<br>
valid id region.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-regions--region--areas" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-regions--region--areas" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>




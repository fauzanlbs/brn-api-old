# Daerah


## Mendapatkan list data daerah yang tersedia.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/areas?search=Tasik&page[number]=1&page[size]=2&sort=created_at&filter[area]=Tasik&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/areas"
);

let params = {
    "search": "Tasik",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[area]": "Tasik",
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
    'https://api-brn.neosantara.co.id/api/areas',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Tasik',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[area]'=> 'Tasik',
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
<div id="execution-results-GETapi-areas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-areas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-areas"></code></pre>
</div>
<div id="execution-error-GETapi-areas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-areas"></code></pre>
</div>
<form id="form-GETapi-areas" data-method="GET" data-path="api/areas" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-areas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-areas" onclick="tryItOut('GETapi-areas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-areas" onclick="cancelTryOut('GETapi-areas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-areas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/areas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Mencari data daerah.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[area]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[area]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nana daerah.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>




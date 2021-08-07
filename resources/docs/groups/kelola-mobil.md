# Kelola Mobil


## Mendapatkan list data warna mobil.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/cars/colors?search=merah&page[number]=1&page[size]=2&sort=-color" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/cars/colors"
);

let params = {
    "search": "merah",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-color",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/cars/colors',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'merah',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> '-color',
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
            "color": "Phantom Black"
        },
        {
            "id": 2,
            "color": "Sepang Blue"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/colors?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/colors",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-cars-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-colors"></code></pre>
</div>
<div id="execution-error-GETapi-cars-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-colors"></code></pre>
</div>
<form id="form-GETapi-cars-colors" data-method="GET" data-path="api/cars/colors" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-colors" onclick="tryItOut('GETapi-cars-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-colors" onclick="cancelTryOut('GETapi-cars-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/colors</code></b>
</p>
<p>
<label id="auth-GETapi-cars-colors" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-colors" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Mencari data warna mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default color.
</p>
</form>


## Mendapatkan list data produsen mobil.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/cars/makes?search=BMW&page[number]=1&page[size]=2&sort=-make" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/cars/makes"
);

let params = {
    "search": "BMW",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-make",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/cars/makes',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'BMW',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> '-make',
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
            "fuel": "Audi"
        },
        {
            "id": 2,
            "fuel": "BMW"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/makes?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/makes",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-cars-makes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-makes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-makes"></code></pre>
</div>
<div id="execution-error-GETapi-cars-makes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-makes"></code></pre>
</div>
<form id="form-GETapi-cars-makes" data-method="GET" data-path="api/cars/makes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-makes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-makes" onclick="tryItOut('GETapi-cars-makes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-makes" onclick="cancelTryOut('GETapi-cars-makes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-makes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/makes</code></b>
</p>
<p>
<label id="auth-GETapi-cars-makes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-makes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Mencari data produsen mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default make.
</p>
</form>


## Mendapatkan list data model mobil.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/cars/models?search=S40&page[number]=1&page[size]=2&sort=-model&filter[car_make_id]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/cars/models"
);

let params = {
    "search": "S40",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-model",
    "filter[car_make_id]": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/cars/models',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'S40',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> '-model',
            'filter[car_make_id]'=> '1',
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
            "fuel": "S40"
        },
        {
            "id": 2,
            "fuel": "118D"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/models?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/models",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-cars-models" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-models"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-models"></code></pre>
</div>
<div id="execution-error-GETapi-cars-models" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-models"></code></pre>
</div>
<form id="form-GETapi-cars-models" data-method="GET" data-path="api/cars/models" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-models', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-models" onclick="tryItOut('GETapi-cars-models');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-models" onclick="cancelTryOut('GETapi-cars-models');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-models" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/models</code></b>
</p>
<p>
<label id="auth-GETapi-cars-models" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-models" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Mencari data model mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default model.
</p>
<p>
<b><code>filter[car_make_id]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[car_make_id]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Penyortiran berdasarkan id mobil.
</p>
</form>


## Mendapatkan list data jenis kelas mobil.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/cars/types?search=Sedan&page[number]=1&page[size]=2&sort=-class" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/cars/types"
);

let params = {
    "search": "Sedan",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-class",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/cars/types',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Sedan',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> '-class',
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
            "id": 3,
            "class": "Compact"
        },
        {
            "id": 2,
            "class": "Middle"
        },
        {
            "id": 1,
            "class": "Premium"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/types?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/types",
        "per_page": 15,
        "to": 3
    }
}
```
<div id="execution-results-GETapi-cars-types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-types"></code></pre>
</div>
<div id="execution-error-GETapi-cars-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-types"></code></pre>
</div>
<form id="form-GETapi-cars-types" data-method="GET" data-path="api/cars/types" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-types" onclick="tryItOut('GETapi-cars-types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-types" onclick="cancelTryOut('GETapi-cars-types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/types</code></b>
</p>
<p>
<label id="auth-GETapi-cars-types" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-types" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Mencari data jenis kelas mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default class.
</p>
</form>


## Mendapatkan list data bahan bakar mobil.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/cars/fuels?search=Diesel&page[number]=1&page[size]=2&sort=-fuel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/cars/fuels"
);

let params = {
    "search": "Diesel",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-fuel",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/cars/fuels',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Diesel',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> '-fuel',
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
            "fuel": "Diesel"
        },
        {
            "id": 2,
            "fuel": "Gasoline"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/fuels?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/fuels",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-cars-fuels" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-fuels"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-fuels"></code></pre>
</div>
<div id="execution-error-GETapi-cars-fuels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-fuels"></code></pre>
</div>
<form id="form-GETapi-cars-fuels" data-method="GET" data-path="api/cars/fuels" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-fuels', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-fuels" onclick="tryItOut('GETapi-cars-fuels');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-fuels" onclick="cancelTryOut('GETapi-cars-fuels');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-fuels" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/fuels</code></b>
</p>
<p>
<label id="auth-GETapi-cars-fuels" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-fuels" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Mencari data bahan bakar mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default fuel.
</p>
</form>


## Mendapatkan list data mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data mobil pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-cars?search=Avansa&page[number]=1&page[size]=2&sort=created_at&include=carImages&filter[status]=lost&filter[is_approved]=true&filter[police_number]=Y+3168+XP&filter[year]=2015&filter[is_automatic]=true&filter[capacity]=4&filter[equipment]=exercitationem&filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "carImages",
    "filter[status]": "lost",
    "filter[is_approved]": "true",
    "filter[police_number]": "Y 3168 XP",
    "filter[year]": "2015",
    "filter[is_automatic]": "true",
    "filter[capacity]": "4",
    "filter[equipment]": "exercitationem",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://brn-api.test/api/my-cars',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Avansa',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'include'=> 'carImages',
            'filter[status]'=> 'lost',
            'filter[is_approved]'=> 'true',
            'filter[police_number]'=> 'Y 3168 XP',
            'filter[year]'=> '2015',
            'filter[is_automatic]'=> 'true',
            'filter[capacity]'=> '4',
            'filter[equipment]'=> 'exercitationem',
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
            "id": 24,
            "user_id": 1,
            "status": "lost",
            "is_approved": true,
            "police_number": "K 7998 UG",
            "year": 1984,
            "is_automatic": false,
            "capacity": 2,
            "equipment": null,
            "created_at": "2021-05-05T12:26:50.000000Z",
            "updated_at": "2021-05-05T12:26:50.000000Z",
            "car_make": {
                "id": 3,
                "make": "BMW"
            },
            "car_type": {
                "id": 1,
                "class": "Premium"
            },
            "car_fuel": {
                "id": 3,
                "fuel": "Electric"
            },
            "car_model": {
                "id": 1,
                "car_make_id": 1,
                "model": "A4"
            },
            "car_color": {
                "id": 1,
                "color": "Phantom Black"
            },
            "car_images": [
                {
                    "id": 47,
                    "car_id": 24,
                    "image": "\/cars\/628078224-K7998UG.png",
                    "image_url": "http:\/\/api.brn.com\/storage\/cars\/628078224-K7998UG.png"
                },
                {
                    "id": 48,
                    "car_id": 24,
                    "image": "\/cars\/194609309-K7998UG.png",
                    "image_url": "http:\/\/api.brn.com\/storage\/cars\/194609309-K7998UG.png"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-cars",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-my-cars" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-cars"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-cars"></code></pre>
</div>
<div id="execution-error-GETapi-my-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-cars"></code></pre>
</div>
<form id="form-GETapi-my-cars" data-method="GET" data-path="api/my-cars" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-cars', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-cars" onclick="tryItOut('GETapi-my-cars');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-cars" onclick="cancelTryOut('GETapi-my-cars');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-cars" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-cars</code></b>
</p>
<p>
<label id="auth-GETapi-my-cars" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-cars" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Mencari data mobil pengguna saat ini.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia: <br> #1 <b>carMake</b> : Produsen mobil. <br> #2 <b>carType</b> : Jenis kelas. <br> #3 <b>carFuel</b> : Bahan bakar. <br> #4 <b>carModel</b> : Model mobil. <br> #5 <b>carColor</b> : Warna. <br> #6 <b>carImages</b> : List gambar mobil. <br>Untuk <b>multiple include</b> Anda cukup menambahkan <i>koma</i> (,).
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status.
</p>
<p>
<b><code>filter[is_approved]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_approved]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diterima (1=true 0=false).
</p>
<p>
<b><code>filter[police_number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[police_number]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nomor polisi.
</p>
<p>
<b><code>filter[year]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[year]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tahun mobil.
</p>
<p>
<b><code>filter[is_automatic]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_automatic]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan is automatic (1=true 0=false).
</p>
<p>
<b><code>filter[capacity]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[capacity]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan kapasitas.
</p>
<p>
<b><code>filter[equipment]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[equipment]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan equipment.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan detail data mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars/1"
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
    'https://brn-api.test/api/my-cars/1',
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
    "data": {
        "id": 24,
        "user_id": 1,
        "status": "lost",
        "is_approved": true,
        "police_number": "K 7998 UG",
        "year": 1984,
        "is_automatic": false,
        "capacity": 2,
        "equipment": null,
        "created_at": "2021-05-05T12:26:50.000000Z",
        "updated_at": "2021-05-05T12:26:50.000000Z",
        "car_make": {
            "id": 3,
            "make": "BMW"
        },
        "car_type": {
            "id": 1,
            "class": "Premium"
        },
        "car_fuel": {
            "id": 3,
            "fuel": "Electric"
        },
        "car_model": {
            "id": 1,
            "car_make_id": 1,
            "model": "A4"
        },
        "car_color": {
            "id": 1,
            "color": "Phantom Black"
        },
        "car_images": [
            {
                "id": 47,
                "car_id": 24,
                "image": "\/cars\/628078224-K7998UG.png",
                "image_url": "http:\/\/api.brn.com\/storage\/cars\/628078224-K7998UG.png"
            },
            {
                "id": 48,
                "car_id": 24,
                "image": "\/cars\/194609309-K7998UG.png",
                "image_url": "http:\/\/api.brn.com\/storage\/cars\/194609309-K7998UG.png"
            }
        ]
    }
}
```
<div id="execution-results-GETapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-GETapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-cars--car-"></code></pre>
</div>
<form id="form-GETapi-my-cars--car-" data-method="GET" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-cars--car-" onclick="tryItOut('GETapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-cars--car-" onclick="cancelTryOut('GETapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-GETapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="GETapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car.
</p>
</form>


## Menambahkan mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menambahkan mobil pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/my-cars" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"est","files":[{"image":"path"},{"image":"path"}],"stnk_image":"perferendis","machine_number":"est","chassis_number":"labore"}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "car_make_id": 1,
    "car_type_id": 1,
    "car_fuel_id": 1,
    "car_model_id": 1,
    "car_color_id": 1,
    "police_number": "K 7998 UG",
    "year": "2015",
    "is_automatic": false,
    "capacity": "4",
    "equipment": "est",
    "files": [
        {
            "image": "path"
        },
        {
            "image": "path"
        }
    ],
    "stnk_image": "perferendis",
    "machine_number": "est",
    "chassis_number": "labore"
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
    'https://brn-api.test/api/my-cars',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'car_make_id' => 1,
            'car_type_id' => 1,
            'car_fuel_id' => 1,
            'car_model_id' => 1,
            'car_color_id' => 1,
            'police_number' => 'K 7998 UG',
            'year' => '2015',
            'is_automatic' => false,
            'capacity' => '4',
            'equipment' => 'est',
            'files' => [
                [
                    'image' => 'path',
                ],
                [
                    'image' => 'path',
                ],
            ],
            'stnk_image' => 'perferendis',
            'machine_number' => 'est',
            'chassis_number' => 'labore',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "..."
}
```
<div id="execution-results-POSTapi-my-cars" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-cars"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-cars"></code></pre>
</div>
<div id="execution-error-POSTapi-my-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-cars"></code></pre>
</div>
<form id="form-POSTapi-my-cars" data-method="POST" data-path="api/my-cars" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-cars', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-cars" onclick="tryItOut('POSTapi-my-cars');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-cars" onclick="cancelTryOut('POSTapi-my-cars');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-cars" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-cars</code></b>
</p>
<p>
<label id="auth-POSTapi-my-cars" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-cars" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_make_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_make_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carMake</b>.
</p>
<p>
<b><code>car_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_type_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carType</b>.
</p>
<p>
<b><code>car_fuel_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_fuel_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carFuel</b>.
</p>
<p>
<b><code>car_model_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_model_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carModel</b>.
</p>
<p>
<b><code>car_color_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_color_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carColor</b>.
</p>
<p>
<b><code>police_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="police_number" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
nomor polisi.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="year" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
tahun.
</p>
<p>
<b><code>is_automatic</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-my-cars" hidden><input type="radio" name="is_automatic" value="true" data-endpoint="POSTapi-my-cars" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-my-cars" hidden><input type="radio" name="is_automatic" value="false" data-endpoint="POSTapi-my-cars" data-component="body" required ><code>false</code></label>
<br>
apakah automatic?.
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
kapasitas mobil.
</p>
<p>
<b><code>equipment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="equipment" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
eqipment.
</p>
<p>
<details>
<summary>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
List gambar.
</summary>
<br>
<p>
<b><code>files[].image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="files.0.image" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
file gambar.
</p>
</details>
</p>
<p>
<b><code>stnk_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="stnk_image" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Fotor/Gambar STNK.
</p>
<p>
<b><code>machine_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="machine_number" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Nomor Mesin.
</p>
<p>
<b><code>chassis_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="chassis_number" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Nomor Rangka.
</p>

</form>


## Memperbaharui salah satu mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa memperbaharui salah satu mobil pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"esse","files":[{"image":"path"},[]],"stnk_image":"itaque","machine_number":"aut","chassis_number":"est"}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "car_make_id": 1,
    "car_type_id": 1,
    "car_fuel_id": 1,
    "car_model_id": 1,
    "car_color_id": 1,
    "police_number": "K 7998 UG",
    "year": "2015",
    "is_automatic": false,
    "capacity": "4",
    "equipment": "esse",
    "files": [
        {
            "image": "path"
        },
        []
    ],
    "stnk_image": "itaque",
    "machine_number": "aut",
    "chassis_number": "est"
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
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'car_make_id' => 1,
            'car_type_id' => 1,
            'car_fuel_id' => 1,
            'car_model_id' => 1,
            'car_color_id' => 1,
            'police_number' => 'K 7998 UG',
            'year' => '2015',
            'is_automatic' => false,
            'capacity' => '4',
            'equipment' => 'esse',
            'files' => [
                [
                    'image' => 'path',
                ],
                [],
            ],
            'stnk_image' => 'itaque',
            'machine_number' => 'aut',
            'chassis_number' => 'est',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "..."
}
```
<div id="execution-results-POSTapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-POSTapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-cars--car-"></code></pre>
</div>
<form id="form-POSTapi-my-cars--car-" data-method="POST" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-cars--car-" onclick="tryItOut('POSTapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-cars--car-" onclick="cancelTryOut('POSTapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-POSTapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="POSTapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_make_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_make_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carMake</b>.
</p>
<p>
<b><code>car_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_type_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carType</b>.
</p>
<p>
<b><code>car_fuel_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_fuel_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carFuel</b>.
</p>
<p>
<b><code>car_model_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_model_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carModel</b>.
</p>
<p>
<b><code>car_color_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_color_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carColor</b>.
</p>
<p>
<b><code>police_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="police_number" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
nomor polisi.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="year" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
tahun.
</p>
<p>
<b><code>is_automatic</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-my-cars--car-" hidden><input type="radio" name="is_automatic" value="true" data-endpoint="POSTapi-my-cars--car-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-my-cars--car-" hidden><input type="radio" name="is_automatic" value="false" data-endpoint="POSTapi-my-cars--car-" data-component="body" required ><code>false</code></label>
<br>
apakah automatic?.
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
kapasitas mobil.
</p>
<p>
<b><code>equipment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="equipment" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
eqipment.
</p>
<p>
<details>
<summary>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
List gambar.
</summary>
<br>
<p>
<b><code>files[].image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="files.0.image" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
file gambar.
</p>
</details>
</p>
<p>
<b><code>stnk_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="stnk_image" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Fotor/Gambar STNK.
</p>
<p>
<b><code>machine_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="machine_number" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Nomor Mesin.
</p>
<p>
<b><code>chassis_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="chassis_number" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Nomor Rangka.
</p>

</form>


## Menghapus salah satu mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menghapus salah satu mobil pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://brn-api.test/api/my-cars/1',
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
    "message": "..."
}
```
<div id="execution-results-DELETEapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-cars--car-"></code></pre>
</div>
<form id="form-DELETEapi-my-cars--car-" data-method="DELETE" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-cars--car-" onclick="tryItOut('DELETEapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-cars--car-" onclick="cancelTryOut('DELETEapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="DELETEapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car. Defaults to 'id'.
</p>
</form>


## Menghapus salah satu gambar mobil pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menghapus salah satu gambar mobil pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/my-cars/car-images/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-cars/car-images/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://brn-api.test/api/my-cars/car-images/1',
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
    "message": "..."
}
```
<div id="execution-results-DELETEapi-my-cars-car-images--carImage-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-cars-car-images--carImage-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-cars-car-images--carImage-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-cars-car-images--carImage-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-cars-car-images--carImage-"></code></pre>
</div>
<form id="form-DELETEapi-my-cars-car-images--carImage-" data-method="DELETE" data-path="api/my-cars/car-images/{carImage}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-cars-car-images--carImage-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-cars-car-images--carImage-" onclick="tryItOut('DELETEapi-my-cars-car-images--carImage-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-cars-car-images--carImage-" onclick="cancelTryOut('DELETEapi-my-cars-car-images--carImage-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-cars-car-images--carImage-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-cars/car-images/{carImage}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-cars-car-images--carImage-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-cars-car-images--carImage-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>carImage</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="carImage" data-endpoint="DELETEapi-my-cars-car-images--carImage-" data-component="url" required  hidden>
<br>
valid id carImage. Defaults to 'id'.
</p>
</form>




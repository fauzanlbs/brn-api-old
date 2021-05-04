# Kelola Mobil


## Mendapatkan list data warna mobil.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://api.brn.com/api/cars/colors?search=merah&page[number]=1&page[size]=2&sort=-color" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.brn.com/api/cars/colors"
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
    'http://api.brn.com/api/cars/colors',
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


## Mendapatkan list data bahan bakar mobil.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://api.brn.com/api/cars/fuels?search=Diesel&page[number]=1&page[size]=2&sort=-fuel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.brn.com/api/cars/fuels"
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
    'http://api.brn.com/api/cars/fuels',
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


## Mendapatkan list data model mobil.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://api.brn.com/api/cars/models?search=S40&page[number]=1&page[size]=2&sort=-model&filter[car_make_id]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.brn.com/api/cars/models"
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
    'http://api.brn.com/api/cars/models',
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



> Example request:

```bash
curl -X GET \
    -G "http://api.brn.com/api/cars/types?search=Sedan&page[number]=1&page[size]=2&sort=-class" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.brn.com/api/cars/types"
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
    'http://api.brn.com/api/cars/types',
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


## Mendapatkan list data produsen mobil.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://api.brn.com/api/cars/makes?search=BMW&page[number]=1&page[size]=2&sort=-make" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://api.brn.com/api/cars/makes"
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
    'http://api.brn.com/api/cars/makes',
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




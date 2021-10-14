# Anggota


## Mendapatkan list data anggota.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/members?include=addresses%2Cpersonal-information&roles=consectetur&filter[name]=Arya+Anggara&filter[created_at]=2020-12-24&guest=true" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/members"
);

let params = {
    "include": "addresses,personal-information",
    "roles": "consectetur",
    "filter[name]": "Arya Anggara",
    "filter[created_at]": "2020-12-24",
    "guest": "true",
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
    'https://api-brn.neosantara.co.id/api/members',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'include'=> 'addresses,personal-information',
            'roles'=> 'consectetur',
            'filter[name]'=> 'Arya Anggara',
            'filter[created_at]'=> '2020-12-24',
            'guest'=> 'true',
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
            "name": "Admin Arya Anggara",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
            "created_at": "2021-05-29T08:29:44.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/members?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/members",
        "per_page": 10,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-members" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-members"></code></pre>
</div>
<div id="execution-error-GETapi-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-members"></code></pre>
</div>
<form id="form-GETapi-members" data-method="GET" data-path="api/members" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-members" onclick="tryItOut('GETapi-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-members" onclick="cancelTryOut('GETapi-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/members</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Include akan memuat data dengan relasi, relasi yang tersedia: <br> #1 <b>roles</b> : Mendapatkan informasi wewenang pengguna <br> #2 <b>addresses</b> : Alamat yang didaftarkan. <br> #3 <b>personal-information</b> : Informasi pribadi.
</p>
<p>
<b><code>roles</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="roles" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Filter data berdasar kan role
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nama.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>guest</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guest" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan pengguna yang belum menjadi anggota brn.
</p>
</form>


## Mendapatkan detail data anggota.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/members/1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/members/1"
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
    'https://api-brn.neosantara.co.id/api/members/1',
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
    "data": {
        "id": 1,
        "points_relation_sum_points": 10,
        "roles": [
            {
                "name": "admin"
            },
            {
                "name": "member"
            }
        ],
        "name": "Arya Anggara",
        "profile_photo_path": null,
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Arya+Anggara&color=7F9CF5&background=EBF4FF",
        "created_at": "2021-05-29T08:29:44.000000Z",
        "addresses": [
            {
                "id": 1,
                "label": "Default Address",
                "given_name": "Abdelrahman",
                "family_name": "Omran",
                "organization": "Rinvex",
                "country_code": "id",
                "street": "56 john doe st.",
                "state": "Alexandria",
                "city": "Alexandria",
                "postal_code": "21614",
                "latitude": 31.2467601,
                "longitude": 29.9020376,
                "is_primary": false,
                "is_billing": false,
                "is_shipping": false
            }
        ],
        "personal_information": {
            "bio": "Don`t care what you say about me I like the way I am.",
            "gender": "male",
            "date_of_birth": "2002-12-24T17:00:00.000000Z",
            "company_name": "Neosantara",
            "company_logo": null
        }
    }
}
```
<div id="execution-results-GETapi-members--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-members--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-members--user-"></code></pre>
</div>
<div id="execution-error-GETapi-members--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-members--user-"></code></pre>
</div>
<form id="form-GETapi-members--user-" data-method="GET" data-path="api/members/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-members--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-members--user-" onclick="tryItOut('GETapi-members--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-members--user-" onclick="cancelTryOut('GETapi-members--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-members--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/members/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="GETapi-members--user-" data-component="url" required  hidden>
<br>
valid id user.
</p>
</form>




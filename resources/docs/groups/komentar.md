# Komentar


## Mendapatkan list data user yang menyukai komentar.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/comments/1/likes?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1/likes"
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
    'https://api-brn.neosantara.co.id/api/comments/1/likes',
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
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles\/3\/liked?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles\/3\/liked",
        "per_page": 15,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-comments--comment--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment--likes"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment--likes"></code></pre>
</div>
<form id="form-GETapi-comments--comment--likes" data-method="GET" data-path="api/comments/{comment}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment--likes" onclick="tryItOut('GETapi-comments--comment--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment--likes" onclick="cancelTryOut('GETapi-comments--comment--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-comments--comment--likes" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-comments--comment--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-comments--comment--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Mendapatkan list data balasan komentar.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/comments/1/replies?page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1/replies"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
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
    'https://api-brn.neosantara.co.id/api/comments/1/replies',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
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
            "id": 4,
            "comment": "Semangat Terus !!!",
            "likes_count": 1,
            "created_at": "2021-04-30T18:14:44.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles\/2\/comments?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles\/2\/comments",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-comments--comment--replies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment--replies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment--replies"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment--replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment--replies"></code></pre>
</div>
<form id="form-GETapi-comments--comment--replies" data-method="GET" data-path="api/comments/{comment}/replies" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment--replies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment--replies" onclick="tryItOut('GETapi-comments--comment--replies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment--replies" onclick="cancelTryOut('GETapi-comments--comment--replies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment--replies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}/replies</code></b>
</p>
<p>
<label id="auth-GETapi-comments--comment--replies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-comments--comment--replies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-comments--comment--replies" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-comments--comment--replies" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-comments--comment--replies" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Menambahan Balasan Komentar.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/comments/1/replies" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'

```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1/replies"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "comment": "Semangat terus :)"
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
    'https://api-brn.neosantara.co.id/api/comments/1/replies',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'comment' => 'Semangat terus :)',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

{
 "message": "Berhasil menambahkan komentar.",
}
```
<div id="execution-results-POSTapi-comments--comment--replies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments--comment--replies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments--comment--replies"></code></pre>
</div>
<div id="execution-error-POSTapi-comments--comment--replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments--comment--replies"></code></pre>
</div>
<form id="form-POSTapi-comments--comment--replies" data-method="POST" data-path="api/comments/{comment}/replies" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments--comment--replies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments--comment--replies" onclick="tryItOut('POSTapi-comments--comment--replies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments--comment--replies" onclick="cancelTryOut('POSTapi-comments--comment--replies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments--comment--replies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments/{comment}/replies</code></b>
</p>
<p>
<label id="auth-POSTapi-comments--comment--replies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments--comment--replies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="POSTapi-comments--comment--replies" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-comments--comment--replies" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>


## Menghapus komentar.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://api-brn.neosantara.co.id/api/comments/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1"
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
    'https://api-brn.neosantara.co.id/api/comments/1',
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
 "message": "Berhasil menghapus komentar.",
}
```
<div id="execution-results-DELETEapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment-"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment-" data-method="DELETE" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment-" onclick="tryItOut('DELETEapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment-" onclick="cancelTryOut('DELETEapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="DELETEapi-comments--comment-" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form>


## Menyukai komentar.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://api-brn.neosantara.co.id/api/comments/1/liked',
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
 "message": "Berhasil menyukai komentar.",
}
```
<div id="execution-results-POSTapi-comments--comment--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments--comment--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments--comment--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-comments--comment--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments--comment--liked"></code></pre>
</div>
<form id="form-POSTapi-comments--comment--liked" data-method="POST" data-path="api/comments/{comment}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments--comment--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments--comment--liked" onclick="tryItOut('POSTapi-comments--comment--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments--comment--liked" onclick="cancelTryOut('POSTapi-comments--comment--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments--comment--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments/{comment}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-comments--comment--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments--comment--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="POSTapi-comments--comment--liked" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form>


## Batalkan menyukai komentar.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://api-brn.neosantara.co.id/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/comments/1/liked"
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
    'https://api-brn.neosantara.co.id/api/comments/1/liked',
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
 "message": "Berhasil membatalkan menyukai komentar.",
}
```
<div id="execution-results-DELETEapi-comments--comment--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment--liked"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment--liked" data-method="DELETE" data-path="api/comments/{comment}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment--liked" onclick="tryItOut('DELETEapi-comments--comment--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment--liked" onclick="cancelTryOut('DELETEapi-comments--comment--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="DELETEapi-comments--comment--liked" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form>




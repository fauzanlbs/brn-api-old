# Artikel


## Mendapatkan list data artikel.


Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel

> Example request:

```bash
curl -X GET \
    -G "http://brn-api.test/api/articles?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[title]=Berita+hari+ini&filter[slug]=berita-hari-ini&filter[created_at]=2020-12-24&filter[featured]=1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Berita hari ini",
    "filter[slug]": "berita-hari-ini",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
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
    'http://brn-api.test/api/articles',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[title]'=> 'Berita hari ini',
            'filter[slug]'=> 'berita-hari-ini',
            'filter[created_at]'=> '2020-12-24',
            'filter[featured]'=> '1',
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
            "id": 16,
            "slug": "performance-checklist",
            "image": "articles\/1.jpeg",
            "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
            "title": "The Ultimate Performance Checklist For Laravel Apps",
            "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
            "status": "PUBLISHED",
            "date": "2021-04-29T17:00:00.000000Z",
            "featured": false,
            "created_at": "2021-04-30T13:45:33.000000Z",
            "updated_at": "2021-04-30T13:45:33.000000Z",
            "likes_count": 5,
            "views_count": 631,
            "comments_count": 5,
            "categories": [
                {
                    "id": 9,
                    "slug": "performance",
                    "name": "performance",
                    "description": "tips for yout aplication"
                }
            ],
            "author": {
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-articles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles"></code></pre>
</div>
<div id="execution-error-GETapi-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles"></code></pre>
</div>
<form id="form-GETapi-articles" data-method="GET" data-path="api/articles" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles" onclick="tryItOut('GETapi-articles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles" onclick="cancelTryOut('GETapi-articles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Mencari data artikel.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>


## Mendapatkan detail data artikel.




> Example request:

```bash
curl -X GET \
    -G "http://brn-api.test/api/articles/1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1"
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
    'http://brn-api.test/api/articles/1',
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
        "slug": "performance-checklist",
        "image": "articles\/1.jpeg",
        "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
        "title": "The Ultimate Performance Checklist For Laravel Apps",
        "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
        "status": "PUBLISHED",
        "date": "2021-04-29T17:00:00.000000Z",
        "featured": false,
        "created_at": "2021-04-30T13:45:33.000000Z",
        "updated_at": "2021-04-30T13:45:33.000000Z",
        "likes_count": 5,
        "views_count": 631,
        "comments_count": 5,
        "categories": [
            {
                "id": 9,
                "slug": "performance",
                "name": "performance",
                "description": "tips for yout aplication"
            }
        ],
        "author": {
            "roles": [
                {
                    "name": "admin"
                }
            ],
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
            "created_at": "2021-04-30T16:05:56.000000Z"
        }
    }
}
```
<div id="execution-results-GETapi-articles--article-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article-"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article-"></code></pre>
</div>
<form id="form-GETapi-articles--article-" data-method="GET" data-path="api/articles/{article}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article-" onclick="tryItOut('GETapi-articles--article-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article-" onclick="cancelTryOut('GETapi-articles--article-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article-" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form>


## Mendapatkan list data artikel bedasarkan kategori.


Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel

> Example request:

```bash
curl -X GET \
<<<<<<< Updated upstream
    -G "http://api.brn.com/api/articles/categories/deserunt?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[title]=Berita+hari+ini&filter[slug]=berita-hari-ini&filter[created_at]=2020-12-24&filter[featured]=1" \
=======
    -G "http://brn-api.test/api/articles/categories/libero?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[title]=Berita+hari+ini&filter[slug]=berita-hari-ini&filter[created_at]=2020-12-24&filter[featured]=1" \
>>>>>>> Stashed changes
    -H "Accept: application/json"
```

```javascript
const url = new URL(
<<<<<<< Updated upstream
    "http://api.brn.com/api/articles/categories/deserunt"
=======
    "http://brn-api.test/api/articles/categories/libero"
>>>>>>> Stashed changes
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Berita hari ini",
    "filter[slug]": "berita-hari-ini",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
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
<<<<<<< Updated upstream
    'http://api.brn.com/api/articles/categories/deserunt',
=======
    'http://brn-api.test/api/articles/categories/libero',
>>>>>>> Stashed changes
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[title]'=> 'Berita hari ini',
            'filter[slug]'=> 'berita-hari-ini',
            'filter[created_at]'=> '2020-12-24',
            'filter[featured]'=> '1',
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
            "id": 16,
            "slug": "performance-checklist",
            "image": "articles\/1.jpeg",
            "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
            "title": "The Ultimate Performance Checklist For Laravel Apps",
            "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
            "status": "PUBLISHED",
            "date": "2021-04-29T17:00:00.000000Z",
            "featured": false,
            "created_at": "2021-04-30T13:45:33.000000Z",
            "updated_at": "2021-04-30T13:45:33.000000Z",
            "likes_count": 5,
            "views_count": 631,
            "comments_count": 5,
            "categories": [
                {
                    "id": 9,
                    "slug": "performance",
                    "name": "performance",
                    "description": "tips for yout aplication"
                }
            ],
            "author": {
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-articles-categories--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles-categories--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles-categories--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-articles-categories--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles-categories--slug-"></code></pre>
</div>
<form id="form-GETapi-articles-categories--slug-" data-method="GET" data-path="api/articles/categories/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles-categories--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles-categories--slug-" onclick="tryItOut('GETapi-articles-categories--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles-categories--slug-" onclick="cancelTryOut('GETapi-articles-categories--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles-categories--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/categories/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-articles-categories--slug-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Mencari data artikel.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>


## Mendapatkan list data komentar artikel.




> Example request:

```bash
curl -X GET \
    -G "http://brn-api.test/api/articles/1/comments?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1/comments"
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
    'http://brn-api.test/api/articles/1/comments',
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
<div id="execution-results-GETapi-articles--article--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article--comments"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article--comments"></code></pre>
</div>
<form id="form-GETapi-articles--article--comments" data-method="GET" data-path="api/articles/{article}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article--comments" onclick="tryItOut('GETapi-articles--article--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article--comments" onclick="cancelTryOut('GETapi-articles--article--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article--comments" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles--article--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles--article--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Mendapatkan list data user yang menyukai artikel.




> Example request:

```bash
curl -X GET \
    -G "http://brn-api.test/api/articles/1/likes?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1/likes"
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
    'http://brn-api.test/api/articles/1/likes',
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
<div id="execution-results-GETapi-articles--article--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article--likes"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article--likes"></code></pre>
</div>
<form id="form-GETapi-articles--article--likes" data-method="GET" data-path="api/articles/{article}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article--likes" onclick="tryItOut('GETapi-articles--article--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article--likes" onclick="cancelTryOut('GETapi-articles--article--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article--likes" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles--article--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles--article--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Menambahan komentar artikel.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://brn-api.test/api/articles/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'

```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1/comments"
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
    'http://brn-api.test/api/articles/1/comments',
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
<div id="execution-results-POSTapi-articles--article--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-articles--article--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-articles--article--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-articles--article--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-articles--article--comments"></code></pre>
</div>
<form id="form-POSTapi-articles--article--comments" data-method="POST" data-path="api/articles/{article}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-articles--article--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-articles--article--comments" onclick="tryItOut('POSTapi-articles--article--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-articles--article--comments" onclick="cancelTryOut('POSTapi-articles--article--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-articles--article--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/articles/{article}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-articles--article--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-articles--article--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="POSTapi-articles--article--comments" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-articles--article--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>


## Menyukai artikel.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1/liked"
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
    'http://brn-api.test/api/articles/1/liked',
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
 "message": "Berhasil menyukai artikel.",
}
```
<div id="execution-results-POSTapi-articles--article--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-articles--article--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-articles--article--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-articles--article--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-articles--article--liked"></code></pre>
</div>
<form id="form-POSTapi-articles--article--liked" data-method="POST" data-path="api/articles/{article}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-articles--article--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-articles--article--liked" onclick="tryItOut('POSTapi-articles--article--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-articles--article--liked" onclick="cancelTryOut('POSTapi-articles--article--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-articles--article--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/articles/{article}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-articles--article--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-articles--article--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="POSTapi-articles--article--liked" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form>


## Batalkan menyukai artikel.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://brn-api.test/api/articles/1/liked"
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
    'http://brn-api.test/api/articles/1/liked',
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
 "message": "Berhasil membatalkan menyukai artikel.",
}
```
<div id="execution-results-DELETEapi-articles--article--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-articles--article--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-articles--article--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-articles--article--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-articles--article--liked"></code></pre>
</div>
<form id="form-DELETEapi-articles--article--liked" data-method="DELETE" data-path="api/articles/{article}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-articles--article--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-articles--article--liked" onclick="tryItOut('DELETEapi-articles--article--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-articles--article--liked" onclick="cancelTryOut('DELETEapi-articles--article--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-articles--article--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/articles/{article}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-articles--article--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-articles--article--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="DELETEapi-articles--article--liked" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form>




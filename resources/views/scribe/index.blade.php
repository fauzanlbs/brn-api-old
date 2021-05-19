<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Buser Rent Car Nasional Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 19 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Dokumentasi ini bertujuan untuk memberikan semua informasi yang Anda butuhkan untuk bekerja dengan API kami.</p>
<aside>Saat Anda menggulir, Anda akan melihat contoh kode untuk bekerja dengan API dalam berbagai bahasa pemrograman di area gelap di sebelah kanan (atau sebagai bagian dari konten di seluler).
Anda dapat mengganti bahasa yang digunakan dengan tab di kanan atas (atau dari menu navigasi di kiri atas pada ponsel).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "https://brn-api.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://brn-api.test</code></pre><h1>Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Anda bisa mendapatkan token Anda dengan cara <b>Login</b>.</p><h1>Artikel</h1>
<h2>Mendapatkan list data artikel.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Berita+hari+ini&amp;filter[slug]=berita-hari-ini&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles"
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Berita hari ini',
            'filter[slug]'=&gt; 'berita-hari-ini',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan detail data artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-04-30T16:05:56.000000Z"
        }
    }
}</code></pre>
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
<h2>Mendapatkan list data artikel bedasarkan kategori.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/categories/magni?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Berita+hari+ini&amp;filter[slug]=berita-hari-ini&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/categories/magni"
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/categories/magni',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Berita hari ini',
            'filter[slug]'=&gt; 'berita-hari-ini',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data komentar artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1/comments',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data user yang menyukai artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Menambahan komentar artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/articles/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/articles/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
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
<h2>Menyukai artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/articles/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai artikel.",
}</code></pre>
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
<h2>Batalkan menyukai artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/articles/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai artikel.",
}</code></pre>
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
</form><h1>Daily Check in</h1>
<h2>Check in hari ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/check-in" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/check-in"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/check-in',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil check in hari ini.",
}</code></pre>
<div id="execution-results-GETapi-check-in" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-check-in"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-check-in"></code></pre>
</div>
<div id="execution-error-GETapi-check-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-check-in"></code></pre>
</div>
<form id="form-GETapi-check-in" data-method="GET" data-path="api/check-in" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-check-in', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-check-in" onclick="tryItOut('GETapi-check-in');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-check-in" onclick="cancelTryOut('GETapi-check-in');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-check-in" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/check-in</code></b>
</p>
<p>
<label id="auth-GETapi-check-in" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-check-in" data-component="header"></label>
</p>
</form><h1>Forum Diskusi</h1>
<h2>Mendapatkan list data diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data diskusi pengguna saat ini. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-discussions?only=case-reports&amp;search=Mobil+baru&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Mobil+baru&amp;filter[slug]=mobil-baru&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-discussions"
);

let params = {
    "only": "case-reports",
    "search": "Mobil baru",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Mobil baru",
    "filter[slug]": "mobil-baru",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'only'=&gt; 'case-reports',
            'search'=&gt; 'Mobil baru',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Mobil baru',
            'filter[slug]'=&gt; 'mobil-baru',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 12,
            "case_report_id": null,
            "slug": "slug",
            "title": "title",
            "description": "description",
            "featured": false,
            "created_at": "2021-05-18T07:18:28.000000Z",
            "updated_at": "2021-05-18T07:18:28.000000Z",
            "likes_count": 0,
            "comments_count": 0,
            "user": {
                "id": 1,
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
                "created_at": "2021-05-18T06:44:10.000000Z"
            }
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/my-discussions?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/my-discussions",
        "per_page": 15,
        "to": 1
    }
}</code></pre>
<div id="execution-results-GETapi-my-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-discussions"></code></pre>
</div>
<div id="execution-error-GETapi-my-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-discussions"></code></pre>
</div>
<form id="form-GETapi-my-discussions" data-method="GET" data-path="api/my-discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-discussions" onclick="tryItOut('GETapi-my-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-discussions" onclick="cancelTryOut('GETapi-my-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-discussions</code></b>
</p>
<p>
<label id="auth-GETapi-my-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>only</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="only" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diskusi yang hanya di kususkan untuk laporan kasus, (<b>case-reports</b>).
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Mencari data diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>
<h2>Mendapatkan list semua data diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list semua data diskus. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions?only=case-reports&amp;search=Mobil+baru&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Mobil+baru&amp;filter[slug]=mobil-baru&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions"
);

let params = {
    "only": "case-reports",
    "search": "Mobil baru",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Mobil baru",
    "filter[slug]": "mobil-baru",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'only'=&gt; 'case-reports',
            'search'=&gt; 'Mobil baru',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Mobil baru',
            'filter[slug]'=&gt; 'mobil-baru',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 12,
            "case_report_id": null,
            "slug": "slug",
            "title": "title",
            "description": "description",
            "featured": false,
            "created_at": "2021-05-18T07:18:28.000000Z",
            "updated_at": "2021-05-18T07:18:28.000000Z",
            "likes_count": 0,
            "comments_count": 0,
            "user": {
                "id": 1,
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
                "created_at": "2021-05-18T06:44:10.000000Z"
            }
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/my-discussions?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/my-discussions",
        "per_page": 15,
        "to": 1
    }
}</code></pre>
<div id="execution-results-GETapi-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions"></code></pre>
</div>
<div id="execution-error-GETapi-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions"></code></pre>
</div>
<form id="form-GETapi-discussions" data-method="GET" data-path="api/discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions" onclick="tryItOut('GETapi-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions" onclick="cancelTryOut('GETapi-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions</code></b>
</p>
<p>
<label id="auth-GETapi-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>only</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="only" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diskusi yang hanya di kususkan untuk laporan kasus, (<b>case-reports</b>).
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Mencari data diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>
<h2>Mendapatkan detail data diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 12,
        "case_report_id": 1,
        "slug": "slug",
        "title": "title",
        "description": "description",
        "featured": false,
        "created_at": "2021-05-18T07:18:28.000000Z",
        "updated_at": "2021-05-18T07:18:28.000000Z",
        "likes_count": 0,
        "comments_count": 0,
        "user": {
            "id": 1,
            "roles": [
                {
                    "name": "admin"
                }
            ],
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-05-18T06:44:10.000000Z"
        },
        "case_report": null
    }
}</code></pre>
<div id="execution-results-GETapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion-"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion-" data-method="GET" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion-" onclick="tryItOut('GETapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion-" onclick="cancelTryOut('GETapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form>
<h2>Menambahkan diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan diskusi pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"et"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'title' =&gt; 'diskusi tentang rental mobil',
            'description' =&gt; 'et',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions"></code></pre>
</div>
<form id="form-POSTapi-discussions" data-method="POST" data-path="api/discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions" onclick="tryItOut('POSTapi-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions" onclick="cancelTryOut('POSTapi-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-discussions" data-component="body" required  hidden>
<br>
judul diskusi.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-discussions" data-component="body"  hidden>
<br>
deskripsi diskusi.
</p>

</form>
<h2>Menambahkan diskusi untuk laporan kasus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/case-report" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"invite_user_ids":1,"case_report_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/case-report"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "invite_user_ids": 1,
    "case_report_id": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/case-report',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'invite_user_ids' =&gt; 1,
            'case_report_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-discussions-case-report" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions-case-report"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions-case-report"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions-case-report" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions-case-report"></code></pre>
</div>
<form id="form-POSTapi-discussions-case-report" data-method="POST" data-path="api/discussions/case-report" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions-case-report', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions-case-report" onclick="tryItOut('POSTapi-discussions-case-report');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions-case-report" onclick="cancelTryOut('POSTapi-discussions-case-report');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions-case-report" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/case-report</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions-case-report" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions-case-report" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>invite_user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="invite_user_ids.0" data-endpoint="POSTapi-discussions-case-report" data-component="body"  hidden>
<input type="number" name="invite_user_ids.1" data-endpoint="POSTapi-discussions-case-report" data-component="body" hidden>
<br>
List dari id user.
</p>
<p>
<b><code>case_report_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="case_report_id" data-endpoint="POSTapi-discussions-case-report" data-component="body" required  hidden>
<br>
valid id laporan kasus.
</p>

</form>
<h2>Mendapatkan list data member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/case-report/members?search=Arya+Anggara&amp;page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let params = {
    "search": "Arya Anggara",
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Arya Anggara',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<div id="execution-results-GETapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--case-report-members" data-method="GET" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--case-report-members" onclick="tryItOut('GETapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--case-report-members" onclick="cancelTryOut('GETapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Mencari data member diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Menambahkan member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "user_ids": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_ids' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--case-report-members" data-method="POST" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--case-report-members" onclick="tryItOut('POSTapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--case-report-members" onclick="cancelTryOut('POSTapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="user_ids.0" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="body"  hidden>
<input type="number" name="user_ids.1" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="body" hidden>
<br>
List dari id user.
</p>

</form>
<h2>Mengeluarkan member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "user_ids": 1
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_ids' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-DELETEapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion--case-report-members" data-method="DELETE" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion--case-report-members" onclick="tryItOut('DELETEapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion--case-report-members" onclick="cancelTryOut('DELETEapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="user_ids.0" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="body"  hidden>
<input type="number" name="user_ids.1" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="body" hidden>
<br>
List dari id user.
</p>

</form>
<h2>Memperbaharui salah satu diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa memperbaharui salah satu diskusi pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"aspernatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "aspernatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'title' =&gt; 'diskusi tentang rental mobil',
            'description' =&gt; 'aspernatur',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion-"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion-" data-method="POST" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion-" onclick="tryItOut('POSTapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion-" onclick="cancelTryOut('POSTapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-discussions--discussion-" data-component="body" required  hidden>
<br>
judul diskusi.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-discussions--discussion-" data-component="body"  hidden>
<br>
deskripsi diskusi.
</p>

</form>
<h2>Menghapus salah satu diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu diskusi pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-DELETEapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion-"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion-" data-method="DELETE" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion-" onclick="tryItOut('DELETEapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion-" onclick="cancelTryOut('DELETEapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
</form>
<h2>Menandai diskusi sebagai selesai.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Setelah Anda menandai diskusi sebagai selesai pengguna lain tidak akan bisa menambahkan komentar.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://brn-api.test/api/discussions/1/set-finish" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/set-finish"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;patch(
    'https://brn-api.test/api/discussions/1/set-finish',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-PATCHapi-discussions--discussion--set-finish" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-discussions--discussion--set-finish"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-discussions--discussion--set-finish"></code></pre>
</div>
<div id="execution-error-PATCHapi-discussions--discussion--set-finish" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-discussions--discussion--set-finish"></code></pre>
</div>
<form id="form-PATCHapi-discussions--discussion--set-finish" data-method="PATCH" data-path="api/discussions/{discussion}/set-finish" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-discussions--discussion--set-finish', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-discussions--discussion--set-finish" onclick="tryItOut('PATCHapi-discussions--discussion--set-finish');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-discussions--discussion--set-finish" onclick="cancelTryOut('PATCHapi-discussions--discussion--set-finish');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-discussions--discussion--set-finish" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/discussions/{discussion}/set-finish</code></b>
</p>
<p>
<label id="auth-PATCHapi-discussions--discussion--set-finish" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-discussions--discussion--set-finish" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="PATCHapi-discussions--discussion--set-finish" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
</form>
<h2>Mendapatkan list data komentar diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-discussions--discussion--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--comments"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--comments"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--comments" data-method="GET" data-path="api/discussions/{discussion}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--comments" onclick="tryItOut('GETapi-discussions--discussion--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--comments" onclick="cancelTryOut('GETapi-discussions--discussion--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/comments</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--comments" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Mendapatkan list data user yang menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/likes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-discussions--discussion--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--likes"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--likes"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--likes" data-method="GET" data-path="api/discussions/{discussion}/likes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--likes" onclick="tryItOut('GETapi-discussions--discussion--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--likes" onclick="cancelTryOut('GETapi-discussions--discussion--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/likes</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion--likes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--likes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--likes" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Menambahan komentar diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
<div id="execution-results-POSTapi-discussions--discussion--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--comments"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--comments" data-method="POST" data-path="api/discussions/{discussion}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--comments" onclick="tryItOut('POSTapi-discussions--discussion--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--comments" onclick="cancelTryOut('POSTapi-discussions--discussion--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--comments" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-discussions--discussion--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>
<h2>Menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai diskusi.",
}</code></pre>
<div id="execution-results-POSTapi-discussions--discussion--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--liked"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--liked" data-method="POST" data-path="api/discussions/{discussion}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--liked" onclick="tryItOut('POSTapi-discussions--discussion--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--liked" onclick="cancelTryOut('POSTapi-discussions--discussion--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--liked" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form>
<h2>Batalkan menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai diskusi.",
}</code></pre>
<div id="execution-results-DELETEapi-discussions--discussion--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion--liked"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion--liked" data-method="DELETE" data-path="api/discussions/{discussion}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion--liked" onclick="tryItOut('DELETEapi-discussions--discussion--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion--liked" onclick="cancelTryOut('DELETEapi-discussions--discussion--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion--liked" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form><h1>Kategori</h1>
<h2>Mendapatkan list kategori.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data kategori.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/categories?search=motivasi&amp;page[number]=2&amp;page[size]=2&amp;sort=name&amp;filter[name]=motivasi&amp;filter[slug]=motivasi" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/categories"
);

let params = {
    "search": "motivasi",
    "page[number]": "2",
    "page[size]": "2",
    "sort": "name",
    "filter[name]": "motivasi",
    "filter[slug]": "motivasi",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/categories',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'motivasi',
            'page[number]'=&gt; '2',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'name',
            'filter[name]'=&gt; 'motivasi',
            'filter[slug]'=&gt; 'motivasi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "slug": "Motivasi",
            "name": "Motivasi untuk pantang menyerah",
            "description": null
        },
        {
            "id": 1,
            "slug": "Berita",
            "name": "Bertia terbaru",
            "description": null
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/categories?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/categories",
        "per_page": 15,
        "to": 9
    }
}</code></pre>
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories" onclick="tryItOut('GETapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories" onclick="cancelTryOut('GETapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Mencari data kategori.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -name.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nama.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
</form><h1>Kelola Mobil</h1>
<h2>Mendapatkan list data warna mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/colors?search=merah&amp;page[number]=1&amp;page[size]=2&amp;sort=-color" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/colors"
);

let params = {
    "search": "merah",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-color",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/colors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'merah',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-color',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data produsen mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/makes?search=BMW&amp;page[number]=1&amp;page[size]=2&amp;sort=-make" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/makes"
);

let params = {
    "search": "BMW",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-make",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/makes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'BMW',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-make',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data model mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/models?search=S40&amp;page[number]=1&amp;page[size]=2&amp;sort=-model&amp;filter[car_make_id]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/models',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'S40',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-model',
            'filter[car_make_id]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data jenis kelas mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/types?search=Sedan&amp;page[number]=1&amp;page[size]=2&amp;sort=-class" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/types"
);

let params = {
    "search": "Sedan",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-class",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/types',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Sedan',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-class',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data bahan bakar mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/fuels?search=Diesel&amp;page[number]=1&amp;page[size]=2&amp;sort=-fuel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/fuels"
);

let params = {
    "search": "Diesel",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-fuel",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/fuels',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Diesel',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-fuel',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data mobil pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-cars?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=carImages&amp;filter[status]=lost&amp;filter[is_approved]=true&amp;filter[police_number]=Y+3168+XP&amp;filter[year]=2015&amp;filter[is_automatic]=true&amp;filter[capacity]=4&amp;filter[equipment]=quia&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    "filter[equipment]": "quia",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-cars',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'carImages',
            'filter[status]'=&gt; 'lost',
            'filter[is_approved]'=&gt; 'true',
            'filter[police_number]'=&gt; 'Y 3168 XP',
            'filter[year]'=&gt; '2015',
            'filter[is_automatic]'=&gt; 'true',
            'filter[capacity]'=&gt; '4',
            'filter[equipment]'=&gt; 'quia',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
        "first": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&amp;page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&amp;page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-cars",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
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
<h2>Mendapatkan detail data mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Menambahkan mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan mobil pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-cars" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"assumenda","files":[{"image":"path"},{"image":"path"}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    "equipment": "assumenda",
    "files": [
        {
            "image": "path"
        },
        {
            "image": "path"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-cars',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_make_id' =&gt; 1,
            'car_type_id' =&gt; 1,
            'car_fuel_id' =&gt; 1,
            'car_model_id' =&gt; 1,
            'car_color_id' =&gt; 1,
            'police_number' =&gt; 'K 7998 UG',
            'year' =&gt; '2015',
            'is_automatic' =&gt; false,
            'capacity' =&gt; '4',
            'equipment' =&gt; 'assumenda',
            'files' =&gt; [
                [
                    'image' =&gt; 'path',
                ],
                [
                    'image' =&gt; 'path',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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

</form>
<h2>Memperbaharui salah satu mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa memperbaharui salah satu mobil pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"soluta","files":[{"image":"path"},{"image":"path"}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    "equipment": "soluta",
    "files": [
        {
            "image": "path"
        },
        {
            "image": "path"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_make_id' =&gt; 1,
            'car_type_id' =&gt; 1,
            'car_fuel_id' =&gt; 1,
            'car_model_id' =&gt; 1,
            'car_color_id' =&gt; 1,
            'police_number' =&gt; 'K 7998 UG',
            'year' =&gt; '2015',
            'is_automatic' =&gt; false,
            'capacity' =&gt; '4',
            'equipment' =&gt; 'soluta',
            'files' =&gt; [
                [
                    'image' =&gt; 'path',
                ],
                [
                    'image' =&gt; 'path',
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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

</form>
<h2>Menghapus salah satu mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu mobil pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menghapus salah satu gambar mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu gambar mobil pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-cars/car-images/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/car-images/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-cars/car-images/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
</form><h1>Komentar</h1>
<h2>Mendapatkan list data user yang menyukai komentar.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/comments/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/comments/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data balasan komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/comments/1/replies?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/replies"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/comments/1/replies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Menambahan Balasan Komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/comments/1/replies" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/replies"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/comments/1/replies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
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
<h2>Menghapus komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/comments/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/comments/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menghapus komentar.",
}</code></pre>
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
<h2>Menyukai komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/comments/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai komentar.",
}</code></pre>
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
<h2>Batalkan menyukai komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/comments/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai komentar.",
}</code></pre>
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
</form><h1>Kursus</h1>
<h2>Mendapatkan list data kursus yang diikuti.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data kurus yang diikuti.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-courses?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[name]=Marketing+Di+Social+Media&amp;filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-courses',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[name]'=&gt; 'Marketing Di Social Media',
            'filter[description]'=&gt; 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
            "name": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "lessons_count": 7,
            "likes_count": 321,
            "comments_count": 5,
            "created_at": "2021-05-01T12:58:24.000000Z",
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-my-courses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-courses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-courses"></code></pre>
</div>
<div id="execution-error-GETapi-my-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-courses"></code></pre>
</div>
<form id="form-GETapi-my-courses" data-method="GET" data-path="api/my-courses" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-courses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-courses" onclick="tryItOut('GETapi-my-courses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-courses" onclick="cancelTryOut('GETapi-my-courses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-courses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-courses</code></b>
</p>
<p>
<label id="auth-GETapi-my-courses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-courses" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Mencari data kurus yang diikuti.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[description]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[description]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan list data kursus.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data kursus. note: sebelum Anda bisa melihat pembelajaran/video kursus Anda harus mengikut kursus nya terlebih dahulu</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[name]=Marketing+Di+Social+Media&amp;filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[name]'=&gt; 'Marketing Di Social Media',
            'filter[description]'=&gt; 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
            "name": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "lessons_count": 7,
            "likes_count": 321,
            "comments_count": 5,
            "created_at": "2021-05-01T12:58:24.000000Z",
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-courses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses"></code></pre>
</div>
<div id="execution-error-GETapi-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses"></code></pre>
</div>
<form id="form-GETapi-courses" data-method="GET" data-path="api/courses" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses" onclick="tryItOut('GETapi-courses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses" onclick="cancelTryOut('GETapi-courses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Mencari data kursus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[description]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[description]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan detail data kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "user_id": 1,
        "user": {
            "id": 1,
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-05-01T12:58:23.000000Z"
        },
        "image": null,
        "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
        "name": "Microsoft Excel dari dasar hingga mahir",
        "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
        "status": "enabled",
        "lessons_count": 7,
        "likes_count": 321,
        "comments_count": 5,
        "created_at": "2021-05-01T12:58:24.000000Z",
        "updated_at": "2021-05-01T12:58:24.000000Z"
    }
}</code></pre>
<div id="execution-results-POSTapi-courses--course-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course-"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course-"></code></pre>
</div>
<form id="form-POSTapi-courses--course-" data-method="POST" data-path="api/courses/{course}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course-" onclick="tryItOut('POSTapi-courses--course-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course-" onclick="cancelTryOut('POSTapi-courses--course-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course-" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>
<h2>Mendapatkan list data komentar kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/comments',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-courses--course--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--comments"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--comments"></code></pre>
</div>
<form id="form-GETapi-courses--course--comments" data-method="GET" data-path="api/courses/{course}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--comments" onclick="tryItOut('GETapi-courses--course--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--comments" onclick="cancelTryOut('GETapi-courses--course--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Mendapatkan list data user yang menyukai kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-courses--course--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--likes"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--likes"></code></pre>
</div>
<form id="form-GETapi-courses--course--likes" data-method="GET" data-path="api/courses/{course}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--likes" onclick="tryItOut('GETapi-courses--course--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--likes" onclick="cancelTryOut('GETapi-courses--course--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--likes" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Enroll kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/enroll" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/enroll"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/enroll',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil enroll kursus.",
}</code></pre>
<div id="execution-results-POSTapi-courses--course--enroll" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--enroll"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--enroll"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--enroll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--enroll"></code></pre>
</div>
<form id="form-POSTapi-courses--course--enroll" data-method="POST" data-path="api/courses/{course}/enroll" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--enroll', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--enroll" onclick="tryItOut('POSTapi-courses--course--enroll');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--enroll" onclick="cancelTryOut('POSTapi-courses--course--enroll');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--enroll" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/enroll</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--enroll" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--enroll" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--enroll" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>
<h2>Menambahan komentar kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
<div id="execution-results-POSTapi-courses--course--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--comments"></code></pre>
</div>
<form id="form-POSTapi-courses--course--comments" data-method="POST" data-path="api/courses/{course}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--comments" onclick="tryItOut('POSTapi-courses--course--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--comments" onclick="cancelTryOut('POSTapi-courses--course--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-courses--course--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>
<h2>Menyukai kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai kursus.",
}</code></pre>
<div id="execution-results-POSTapi-courses--course--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--liked"></code></pre>
</div>
<form id="form-POSTapi-courses--course--liked" data-method="POST" data-path="api/courses/{course}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--liked" onclick="tryItOut('POSTapi-courses--course--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--liked" onclick="cancelTryOut('POSTapi-courses--course--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>
<h2>Batalkan menyukai kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/courses/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai kursus.",
}</code></pre>
<div id="execution-results-DELETEapi-courses--course--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-courses--course--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courses--course--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-courses--course--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courses--course--liked"></code></pre>
</div>
<form id="form-DELETEapi-courses--course--liked" data-method="DELETE" data-path="api/courses/{course}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courses--course--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-courses--course--liked" onclick="tryItOut('DELETEapi-courses--course--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-courses--course--liked" onclick="cancelTryOut('DELETEapi-courses--course--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-courses--course--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/courses/{course}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-courses--course--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-courses--course--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="DELETEapi-courses--course--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>
<h2>Mendapatkan list data pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data pembelajaran/video kursus.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "title": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "youtube_url": "https: \/\/www.youtube.com\/watch?v=x9f3RAsNZhU&amp;list=RDx9f3RAsNZhU&amp;start_radio=1&amp;ab_channel=EditraTamba",
            "likes_count": 321,
            "comments_count": 5,
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses\/1\/lessons?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses\/1\/lessons?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses\/1\/lessons",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-courses--course--lessons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons" data-method="GET" data-path="api/courses/{course}/lessons" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons" onclick="tryItOut('GETapi-courses--course--lessons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons" onclick="cancelTryOut('GETapi-courses--course--lessons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Mencari data pembelajaran/video kursus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
</form>
<h2>Mendapatkan list data komentar pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons--courseLesson--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons--courseLesson--comments" data-method="GET" data-path="api/courses/{course}/lessons/{courseLesson}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons--courseLesson--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons--courseLesson--comments" onclick="tryItOut('GETapi-courses--course--lessons--courseLesson--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons--courseLesson--comments" onclick="cancelTryOut('GETapi-courses--course--lessons--courseLesson--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons--courseLesson--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/comments</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons--courseLesson--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Mendapatkan list data user yang menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons/1/likes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-courses--course--lessons--courseLesson--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons--courseLesson--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons--courseLesson--likes"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons--courseLesson--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons--courseLesson--likes"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons--courseLesson--likes" data-method="GET" data-path="api/courses/{course}/lessons/{courseLesson}/likes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons--courseLesson--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons--courseLesson--likes" onclick="tryItOut('GETapi-courses--course--lessons--courseLesson--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons--courseLesson--likes" onclick="cancelTryOut('GETapi-courses--course--lessons--courseLesson--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons--courseLesson--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/likes</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons--courseLesson--likes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Menambahan komentar pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/lessons/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/lessons/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
<div id="execution-results-POSTapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--lessons--courseLesson--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<form id="form-POSTapi-courses--course--lessons--courseLesson--comments" data-method="POST" data-path="api/courses/{course}/lessons/{courseLesson}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--lessons--courseLesson--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--lessons--courseLesson--comments" onclick="tryItOut('POSTapi-courses--course--lessons--courseLesson--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--lessons--courseLesson--comments" onclick="cancelTryOut('POSTapi-courses--course--lessons--courseLesson--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--lessons--courseLesson--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--lessons--courseLesson--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>
<h2>Menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/lessons/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai pembelejaran/video kursus.",
}</code></pre>
<div id="execution-results-POSTapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--lessons--courseLesson--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<form id="form-POSTapi-courses--course--lessons--courseLesson--liked" data-method="POST" data-path="api/courses/{course}/lessons/{courseLesson}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--lessons--courseLesson--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--lessons--courseLesson--liked" onclick="tryItOut('POSTapi-courses--course--lessons--courseLesson--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--lessons--courseLesson--liked" onclick="cancelTryOut('POSTapi-courses--course--lessons--courseLesson--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--lessons--courseLesson--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--lessons--courseLesson--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
</form>
<h2>Batalkan menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/courses/1/lessons/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai pembelejaran/video kursus.",
}</code></pre>
<div id="execution-results-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-courses--course--lessons--courseLesson--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<form id="form-DELETEapi-courses--course--lessons--courseLesson--liked" data-method="DELETE" data-path="api/courses/{course}/lessons/{courseLesson}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courses--course--lessons--courseLesson--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-courses--course--lessons--courseLesson--liked" onclick="tryItOut('DELETEapi-courses--course--lessons--courseLesson--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-courses--course--lessons--courseLesson--liked" onclick="cancelTryOut('DELETEapi-courses--course--lessons--courseLesson--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
</form><h1>Laporan kasus</h1>
<h2>Mendapatkan list data laporan kasus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data laporan kasus.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/case-reports?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=architecto&amp;filter[status]=pending&amp;filter[request_delete]=1&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/case-reports"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "architecto",
    "filter[status]": "pending",
    "filter[request_delete]": "1",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'architecto',
            'filter[status]'=&gt; 'pending',
            'filter[request_delete]'=&gt; '1',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 3,
            "user_id": 1,
            "car_id": 1,
            "in_charge_id": null,
            "latitude": 31.25,
            "longitude": 29.9,
            "chronology": "quo",
            "status": "pending",
            "request_delete": false,
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "perpetrator": {
                "id": 3,
                "case_report_id": 3,
                "nik": "123123123213123123123123",
                "name": "Arya",
                "phone_number": "08213123123",
                "address": "Jalan letkol",
                "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
                "information": "asdasdasd",
                "created_at": "2021-05-07T15:18:57.000000Z",
                "updated_at": "2021-05-07T15:18:57.000000Z",
                "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-case-report",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-case-reports"></code></pre>
</div>
<div id="execution-error-GETapi-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-case-reports"></code></pre>
</div>
<form id="form-GETapi-case-reports" data-method="GET" data-path="api/case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-case-reports" onclick="tryItOut('GETapi-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-case-reports" onclick="cancelTryOut('GETapi-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/case-reports</code></b>
</p>
<p>
<label id="auth-GETapi-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Mencari data laporan kasus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia:
<br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status (pending, verified, progress, completed).
</p>
<p>
<b><code>filter[request_delete]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[request_delete]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false).
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan list data laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data laporan kasus pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-case-reports?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=recusandae&amp;filter[status]=pending&amp;filter[request_delete]=1&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "recusandae",
    "filter[status]": "pending",
    "filter[request_delete]": "1",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'recusandae',
            'filter[status]'=&gt; 'pending',
            'filter[request_delete]'=&gt; '1',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 3,
            "user_id": 1,
            "car_id": 1,
            "in_charge_id": null,
            "latitude": 31.25,
            "longitude": 29.9,
            "chronology": "quo",
            "status": "pending",
            "request_delete": false,
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "perpetrator": {
                "id": 3,
                "case_report_id": 3,
                "nik": "123123123213123123123123",
                "name": "Arya",
                "phone_number": "08213123123",
                "address": "Jalan letkol",
                "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
                "information": "asdasdasd",
                "created_at": "2021-05-07T15:18:57.000000Z",
                "updated_at": "2021-05-07T15:18:57.000000Z",
                "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-case-report",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-my-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-case-reports"></code></pre>
</div>
<div id="execution-error-GETapi-my-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-case-reports"></code></pre>
</div>
<form id="form-GETapi-my-case-reports" data-method="GET" data-path="api/my-case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-case-reports" onclick="tryItOut('GETapi-my-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-case-reports" onclick="cancelTryOut('GETapi-my-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-case-reports</code></b>
</p>
<p>
<label id="auth-GETapi-my-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Mencari data laporan kasus pengguna saat ini.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia:
<br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status (pending, verified, progress, completed).
</p>
<p>
<b><code>filter[request_delete]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[request_delete]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false).
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan detail data laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 3,
        "user_id": 1,
        "car_id": 1,
        "in_charge_id": null,
        "latitude": 31.25,
        "longitude": 29.9,
        "chronology": "quo",
        "status": "pending",
        "request_delete": false,
        "created_at": "2021-05-07T15:18:57.000000Z",
        "updated_at": "2021-05-07T15:18:57.000000Z",
        "perpetrator": {
            "id": 3,
            "case_report_id": 3,
            "nik": "123123123213123123123123",
            "name": "Arya",
            "phone_number": "08213123123",
            "address": "Jalan letkol",
            "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
            "information": "asdasdasd",
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
        }
    },
    "message": "Berhasil menambahkan laporan kasus."
}</code></pre>
<div id="execution-results-GETapi-my-case-reports--caseReport-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-case-reports--caseReport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-case-reports--caseReport-"></code></pre>
</div>
<div id="execution-error-GETapi-my-case-reports--caseReport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-case-reports--caseReport-"></code></pre>
</div>
<form id="form-GETapi-my-case-reports--caseReport-" data-method="GET" data-path="api/my-case-reports/{caseReport}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-case-reports--caseReport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-case-reports--caseReport-" onclick="tryItOut('GETapi-my-case-reports--caseReport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-case-reports--caseReport-" onclick="cancelTryOut('GETapi-my-case-reports--caseReport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-case-reports--caseReport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-case-reports/{caseReport}</code></b>
</p>
<p>
<label id="auth-GETapi-my-case-reports--caseReport-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-case-reports--caseReport-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>caseReport</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="caseReport" data-endpoint="GETapi-my-case-reports--caseReport-" data-component="url" required  hidden>
<br>
valid id caseReport.
</p>
</form>
<h2>Menambahkan laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan laporan kasus pengguna saat ini.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-case-reports" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_id":1,"location":"31.2467601,29.9020376","chronology":"et","perpetrator":{"nik":123123123,"name":"Arya Anggara","phone_number":"0821123213","address":"Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia","photo":"path","information":"ut"}}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "car_id": 1,
    "location": "31.2467601,29.9020376",
    "chronology": "et",
    "perpetrator": {
        "nik": 123123123,
        "name": "Arya Anggara",
        "phone_number": "0821123213",
        "address": "Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia",
        "photo": "path",
        "information": "ut"
    }
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_id' =&gt; 1,
            'location' =&gt; '31.2467601,29.9020376',
            'chronology' =&gt; 'et',
            'perpetrator' =&gt; [
                'nik' =&gt; 123123123,
                'name' =&gt; 'Arya Anggara',
                'phone_number' =&gt; '0821123213',
                'address' =&gt; 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia',
                'photo' =&gt; 'path',
                'information' =&gt; 'ut',
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-my-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-case-reports"></code></pre>
</div>
<div id="execution-error-POSTapi-my-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-case-reports"></code></pre>
</div>
<form id="form-POSTapi-my-case-reports" data-method="POST" data-path="api/my-case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-case-reports" onclick="tryItOut('POSTapi-my-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-case-reports" onclick="cancelTryOut('POSTapi-my-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-case-reports</code></b>
</p>
<p>
<label id="auth-POSTapi-my-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car_id" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
valid id <b>car</b>.
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
lokasi (lat, long).
</p>
<p>
<b><code>chronology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="chronology" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
kronologi.
</p>
<p>
<details>
<summary>
<b><code>perpetrator</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
Pelaku.
</summary>
<br>
<p>
<b><code>perpetrator.nik</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="perpetrator.nik" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
NIK.
</p>
<p>
<b><code>perpetrator.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.name" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
Nama lengkap.
</p>
<p>
<b><code>perpetrator.phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.phone_number" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
nomor telepon.
</p>
<p>
<b><code>perpetrator.address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.address" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
Alamat lengkap.
</p>
<p>
<b><code>perpetrator.photo</code></b>&nbsp;&nbsp;<small>image</small>  &nbsp;
<input type="text" name="perpetrator.photo" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
file berupa gambar.
</p>
<p>
<b><code>perpetrator.information</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.information" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
informasi tambahan.
</p>
</details>
</p>

</form>
<h2>Batalkan laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa membuat permintaan pembatalan laporan kasus CaseReportController.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-DELETEapi-my-case-reports--caseReport-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-case-reports--caseReport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-case-reports--caseReport-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-case-reports--caseReport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-case-reports--caseReport-"></code></pre>
</div>
<form id="form-DELETEapi-my-case-reports--caseReport-" data-method="DELETE" data-path="api/my-case-reports/{caseReport}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-case-reports--caseReport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-case-reports--caseReport-" onclick="tryItOut('DELETEapi-my-case-reports--caseReport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-case-reports--caseReport-" onclick="cancelTryOut('DELETEapi-my-case-reports--caseReport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-case-reports--caseReport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-case-reports/{caseReport}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-case-reports--caseReport-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-case-reports--caseReport-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>caseReport</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="caseReport" data-endpoint="DELETEapi-my-case-reports--caseReport-" data-component="url" required  hidden>
<br>
valid id caseReport. Defaults to 'id'.
</p>
</form><h1>Onboarding</h1>
<h2>Mendapatkan list data onboarding.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/onboardings" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/onboardings"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/onboardings',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<div id="execution-results-GETapi-onboardings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-onboardings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-onboardings"></code></pre>
</div>
<div id="execution-error-GETapi-onboardings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-onboardings"></code></pre>
</div>
<form id="form-GETapi-onboardings" data-method="GET" data-path="api/onboardings" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-onboardings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-onboardings" onclick="tryItOut('GETapi-onboardings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-onboardings" onclick="cancelTryOut('GETapi-onboardings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-onboardings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/onboardings</code></b>
</p>
</form><h1>Point</h1>
<h2>Mendapatkan list data misi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/point/missions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/point/missions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/point/missions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "active": true,
            "name": "Daily Check In",
            "description": "Check In setiap hari",
            "points": 10,
            "parent_id": null,
            "childrens": []
        },
        {
            "id": 4,
            "active": true,
            "name": "Grades",
            "description": null,
            "points": 100,
            "parent_id": null,
            "childrens": [
                {
                    "id": 5,
                    "active": true,
                    "name": "Excellent",
                    "description": null,
                    "points": 600,
                    "parent_id": 4,
                    "childrens": [
                        {
                            "id": 6,
                            "active": true,
                            "name": "Excellent",
                            "description": null,
                            "points": 100,
                            "parent_id": 5,
                            "childrens": []
                        }
                    ]
                }
            ]
        }
    ],
    "links": {
        "first": "https:\/\/api.brn.com\/api\/point\/missions?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/api.brn.com\/api\/point\/missions",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<div id="execution-results-GETapi-point-missions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-point-missions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-point-missions"></code></pre>
</div>
<div id="execution-error-GETapi-point-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-point-missions"></code></pre>
</div>
<form id="form-GETapi-point-missions" data-method="GET" data-path="api/point/missions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-point-missions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-point-missions" onclick="tryItOut('GETapi-point-missions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-point-missions" onclick="cancelTryOut('GETapi-point-missions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-point-missions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/point/missions</code></b>
</p>
<p>
<label id="auth-GETapi-point-missions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-point-missions" data-component="header"></label>
</p>
</form>
<h2>Mendapatkan list data histori point.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/point/histories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/point/histories"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/point/histories',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "active": true,
            "name": "Completed Lesson",
            "description": null,
            "points": 100,
            "get_it_at": "2021-05-29T19:46:48.000000Z"
        },
        {
            "id": 1,
            "active": true,
            "name": "Daily Check In",
            "description": "Check In setiap hari",
            "points": 10,
            "get_it_at": "2021-04-29T19:46:48.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/api.brn.com\/api\/point\/missions?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/api.brn.com\/api\/point\/missions",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<div id="execution-results-GETapi-point-histories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-point-histories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-point-histories"></code></pre>
</div>
<div id="execution-error-GETapi-point-histories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-point-histories"></code></pre>
</div>
<form id="form-GETapi-point-histories" data-method="GET" data-path="api/point/histories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-point-histories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-point-histories" onclick="tryItOut('GETapi-point-histories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-point-histories" onclick="cancelTryOut('GETapi-point-histories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-point-histories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/point/histories</code></b>
</p>
<p>
<label id="auth-GETapi-point-histories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-point-histories" data-component="header"></label>
</p>
</form><h1>Server</h1>
<h2>Ping the server.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/ping" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/ping"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/ping',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": "ok",
    "timestamp": "2021-05-19T07:59:02.056308Z",
    "host": "127.0.0.1"
}</code></pre>
<div id="execution-results-GETapi-ping" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ping"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ping"></code></pre>
</div>
<div id="execution-error-GETapi-ping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ping"></code></pre>
</div>
<form id="form-GETapi-ping" data-method="GET" data-path="api/ping" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ping', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ping" onclick="tryItOut('GETapi-ping');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ping" onclick="cancelTryOut('GETapi-ping');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ping" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ping</code></b>
</p>
</form><h1>Tentang BRN</h1>
<h2>Mendapatkan data tentang BRN.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/about" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/about"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/about',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
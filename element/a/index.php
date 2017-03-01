---
layout: single
elementName: a
---

<section id="a" class="element">
  <header class="element-header">
    <nav class="element-links">
        <span>
          Type: <strong>inline</strong>
        </span>
      <span>
        Self-closing:
        <strong>
            No
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/a/" data-element-name="a" data-tooltip="Single page for this element">Permalink</a>
      <a class="element-share" data-tooltip="Share on Twitter or Facebook" data-element-name="a">Share</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/a" data-tooltip="See on Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 class="element-name">
      <a href="#a">
        <span>#</span>
        a
      </a>
    </h2>
    <div class="element-description">
      <p>Creates a <strong>link</strong> to a URL: a web page, a section within a page, an email address... Also called the <code>anchor</code> element, where the <code>a</code> comes from.</p>

    </div>
  </header>

      <div id="a-example-0" class="example">
        <p class="example-label">
          <strong>Example:</strong>
          <a class="example-clipboard" data-tooltip="Click to copy code" data-clipboard-target="#a-example-0-code">Copy</a>
        </p>
        <article class="example-preview">
            <div class="example-output"><a href="http://htmlreference.io">HTML Reference</a></div>
          <div id="a-example-0-code" class="example-code">{% highlight html %}<a href="http://htmlreference.io">HTML Reference</a>{% endhighlight %}</div>
        </article>
      </div>

<article id="a-href" class="attribute attribute--required"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Click to copy" data-clipboard-text="href">
href
</code></h3>
<div class="attribute-description">

Определяет цель ссылки.

<strong class="attribute-is-required">Необходимые.</strong>

</div>
</header>
<div class="attribute-values"><article id="a-href-httphtmlreferenceio" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy href=&quot;http://htmlreference.io&quot;" data-clipboard-text="href=&quot;http://htmlreference.io&quot;">
"http://htmlreference.io"
</code></h4>
<div class="value-description">

Вы можете передать <strong>абсолютный</strong> URL.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="http://htmlreference.io">HTML Ссылка</a></div>
</aside></article><article id="a-href-elementdiv" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy href=&quot;/element/div&quot;" data-clipboard-text="href=&quot;/element/div&quot;">
"/element/div"
</code></h4>
<div class="value-description">

Вы можете передать URL <strong>относительно</strong> к корневой домен.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="/element/div">HTML Ссылка</a></div>
</aside></article><article id="a-href-footer" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy href=&quot;#footer&quot;" data-clipboard-text="href=&quot;#footer&quot;">
"#footer"
</code></h4>
<div class="value-description">

Вы можете настроить таргетинг элемент в пределах <em>одной</em> страницы. Здесь мы целевой элемент<code>&lt;div id="footer"&gt;</code>

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="#footer">нижний колонтитул</a></div>
</aside></article><article id="a-href-mailtoalexsmithcom" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy href=&quot;mailto:alex@smith.com&quot;" data-clipboard-text="href=&quot;mailto:alex@smith.com&quot;">
"mailto:alex@smith.com"
</code></h4>
<div class="value-description">

Вы можете использовать <code>mailto</code>протокол. При нажатии на ссылку откроется почтовый клиент пользователя.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="mailto:alex@smith.com">Свяжитесь со мной</a></div>
</aside></article></div>
</article><article id="a-target" class="attribute"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Click to copy" data-clipboard-text="target">
target
</code></h3>
<div class="attribute-description">

Определяет, в какой вкладке или окне нажатая ссылка будет отображаться.

</div>
</header>
<div class="attribute-values"><article id="a-target-_blank" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy target=&quot;_blank&quot;" data-clipboard-text="target=&quot;_blank&quot;">
"_blank"
</code></h4>
<div class="value-description">

Открыть в новом контексте просмотра, который обычно является <strong>новая вкладка</strong> .

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="http://htmlreference.io" target="_blank">HTML Ссылка</a></div>
</aside></article><article id="a-target-_self" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy target=&quot;_self&quot;" data-clipboard-text="target=&quot;_self&quot;">
"_self"
</code></h4>
<div class="value-description">

Открытие в текущей вкладке.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="http://htmlreference.io" target="_self">HTML Ссылка</a></div>
</aside></article><article id="a-target-_parent" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy target=&quot;_parent&quot;" data-clipboard-text="target=&quot;_parent&quot;">
"_parent"
</code></h4>
<div class="value-description">

Открытие в контексте просмотра родительской, или <code>_self</code>там нет.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="http://htmlreference.io" target="_parent">HTML Ссылка</a></div>
</aside></article><article id="a-target-_top" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy target=&quot;_top&quot;" data-clipboard-text="target=&quot;_top&quot;">
"_top"
</code></h4>
<div class="value-description">

Открывает в верхнем контексте просмотра, или <code>_self</code>там нет.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="http://htmlreference.io" target="_top">HTML Ссылка</a></div>
</aside></article></div>
</article><article id="a-rel" class="attribute"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Click to copy" data-clipboard-text="rel">
rel
</code></h3>
<div class="attribute-description">

Определяет, как целевая ссылка относится к текущей веб-страницы.

</div>
</header>
<div class="attribute-values"><article id="a-rel-nofollow" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Click to copy rel=&quot;nofollow&quot;" data-clipboard-text="rel=&quot;nofollow&quot;">
"nofollow"
</code></h4>
<div class="value-description">

Мишень не связаны между собой. Используется для внешних сайтов обычно.

</div>
</header><aside class="value-preview">
<div class="value-output"><a rel="nofollow">HTML Ссылка</a></div>
</aside></article></div>
</article>

</section>

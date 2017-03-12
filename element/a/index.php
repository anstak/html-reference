---
layout: single
elementName: a
---

<section id="a" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
        <span>
          Тип: <strong>inline (строчный)</strong>
        </span>
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/a/" data-element-name="a" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="a">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/a" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#a">
        <span>#</span>
        a
      </a>
    </h2>
    <div class="element-description">
      <p>Создаёт <strong>ссылку</strong> по URL-адресу на: веб-страницу, раздел веб-страницы, адрес электронной почты... Так же называется элементом <code>anchor</code>, откуда и пошло <code>a</code>.</p>

    </div>
  </header>

      <div id="a-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#a-example-0-code">Копировать</a>
        </p>
        <article class="example-preview">
            <div class="example-output"><a href="https://atomcss.ru">HTML Справочник</a></div>
          <div id="a-example-0-code" class="example-code">{% highlight html %}<a href="https://atomcss.ru">HTML Справочник</a>{% endhighlight %}</div>
        </article>
      </div>

<article id="a-href" class="attribute attribute--required"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Скопировать" data-clipboard-text="href">
href
</code></h3>
<div class="attribute-description">

Определяет URL-адрес по которому можно перейти. <br>

<strong class="attribute-is-required">Обязательный аттрибут.</strong>

</div>
</header>
<div class="attribute-values"><article id="a-href-httphtmlreferenceio" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать href=&quot;https://atomcss.ru&quot;" data-clipboard-text="href=&quot;https://atomcss.ru&quot;">
"https://atomcss.ru"
</code></h4>
<div class="value-description">

Вы можете передать <strong>абсолютный</strong> URL-адрес.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="https://atomcss.ru">HTML Справочник</a></div>
</aside></article><article id="a-href-elementdiv" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать href=&quot;/element/div&quot;" data-clipboard-text="href=&quot;/element/div&quot;">
"/element/div"
</code></h4>
<div class="value-description">

Вы можете передать URL-адрес <strong>относительно</strong> корневого домена.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="/element/div">HTML Справочник</a></div>
</aside></article><article id="a-href-footer" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать href=&quot;#footer&quot;" data-clipboard-text="href=&quot;#footer&quot;">
"#footer"
</code></h4>
<div class="value-description">

Вы можете указать ссылку на элемент в пределах <em>одной и той же</em> веб-страницы. Здесь мы делаем ссылку на элемент<code>&lt;div id="footer"&gt;</code>

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="#footer">Footer</a></div>
</aside></article><article id="a-href-mailtoalexsmithcom" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать href=&quot;mailto:alex@smith.com&quot;" data-clipboard-text="href=&quot;mailto:alex@smith.com&quot;">
"mailto:alex@smith.com"
</code></h4>
<div class="value-description">

Вы можете использовать протокол <code>mailto</code>. При нажатии на ссылку откроется почтовый клиент пользователя.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="mailto:alex@smith.com">Свяжитесь со мной</a></div>
</aside></article></div>
</article><article id="a-target" class="attribute"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Скопировать" data-clipboard-text="target">
target
</code></h3>
<div class="attribute-description">

Определяет, в какой вкладке или окне будет открыта нажатая ссылка.

</div>
</header>
<div class="attribute-values"><article id="a-target-_blank" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать target=&quot;_blank&quot;" data-clipboard-text="target=&quot;_blank&quot;">
"_blank"
</code></h4>
<div class="value-description">

Открывает в новом окне браузера, которое обычно является <strong>новой вкладкой</strong> .

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="https://atomcss.ru" target="_blank">HTML Ссылка</a></div>
</aside></article><article id="a-target-_self" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать target=&quot;_self&quot;" data-clipboard-text="target=&quot;_self&quot;">
"_self"
</code></h4>
<div class="value-description">

Открывает в текущей вкладке.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="https://atomcss.ru" target="_self">HTML Ссылка</a></div>
</aside></article><article id="a-target-_parent" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать target=&quot;_parent&quot;" data-clipboard-text="target=&quot;_parent&quot;">
"_parent"
</code></h4>
<div class="value-description">

Открывает в родительском всплывающем окне, используется <code>_self</code> если такого нет.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="https://atomcss.ru" target="_parent">HTML Ссылка</a></div>
</aside></article><article id="a-target-_top" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать target=&quot;_top&quot;" data-clipboard-text="target=&quot;_top&quot;">
"_top"
</code></h4>
<div class="value-description">

Открывает в верхнем всплывающем окне, используется <code>_self</code> если такого нет.

</div>
</header><aside class="value-preview">
<div class="value-output"><a href="https://atomcss.ru" target="_top">HTML Ссылка</a></div>
</aside></article></div>
</article><article id="a-rel" class="attribute"><header class="attribute-header">
<h3 class="attribute-name"><code class="tag" data-tooltip="Скопировать" data-clipboard-text="rel">
rel
</code></h3>
<div class="attribute-description">

Определяет, какое отношение ссылка имеет к текущей веб-странице.

</div>
</header>
<div class="attribute-values"><article id="a-rel-nofollow" class="value"><header class="value-header">
<h4 class="value-name"><code class="tag" data-tooltip="Скопировать rel=&quot;nofollow&quot;" data-clipboard-text="rel=&quot;nofollow&quot;">
"nofollow"
</code></h4>
<div class="value-description">

Ссылки не связаны между собой. Обычно используется для внешних веб-сайтов.

</div>
</header><aside class="value-preview">
<div class="value-output"><a rel="nofollow">HTML Ссылка</a></div>
</aside></article></div>
</article>

</section>
---
layout: single
elementName: noframes
---

<section id="noframes" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
        <span>
          Тип: <strong>block (блочный)</strong>
        </span>
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/noframes/" data-element-name="noframes" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="noframes">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/noframes" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#noframes">
        <span>#</span>
        noframes
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет содержимое, отображаемое, когда браузер не поддерживает <code>&lt;frame&gt;</code>.</p>

    </div>
  </header>

      <div id="noframes-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#noframes-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><frameset cols="50%, 50%">
  <frame src="{{site.url}}/element/frameset">
  <frame src="{{site.url}}/element/frame">
  <noframes>Этот браузер не поддерживает наборы фреймов.</noframes>
</frameset></div>
          <div id="noframes-example-0-code" class="example-code">{% highlight html %}<frameset cols="50%, 50%">
  <frame src="{{site.url}}/element/frameset">
  <frame src="{{site.url}}/element/frame">
  <noframes>Этот браузер не поддерживает наборы фреймов.</noframes>
</frameset>{% endhighlight %}</div>
        </article>
      </div>

</section>

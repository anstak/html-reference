---
layout: single
elementName: base
---

<section id="base" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Yes
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/base/" data-element-name="base" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="base">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/base" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#base">
        <span>#</span>
        base
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет основной URL для всех <strong>родственных</strong> ссылок веб-страницы. Должна быть размещена в тэге <code>&lt;head&gt;</code>.</p>

    </div>
  </header>

      <div id="base-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#base-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><base href="{{site.url}}">
<a href="/element/base">Базовый HTML элемент</a>
<!-- This will be an absolute link to https://atomcss.ru/element/base --></div>
          <div id="base-example-0-code" class="example-code">{% highlight html %}<base href="{{site.url}}">
<a href="/element/base"><Базовый HTML элемент</a>
<!-- Это будет абсолютной ссылкой к https://atomcss.ru/element/base -->{% endhighlight %}</div>
        </article>
      </div>

    <article id="base-href" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="href">
            href
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет базовое значение всех ссылок на веб-странице.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="base-href-siteurl" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;{{site.url}}&quot;" data-clipboard-text="href=&quot;{{site.url}}&quot;">
                      "{{site.url}}"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете пройти по <strong>абсолютному</strong> URL адресу.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><base  href="{{site.url}}"></base></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="base-target" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="target">
            target
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет в какой вкладке или окне появится ссылка веб-страницы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="base-target-_blank" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_blank&quot;" data-clipboard-text="target=&quot;_blank&quot;">
                      "_blank"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в новом браузерном окне, которое обычно <strong>новая вкладка</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><base  href="{{site.url}}" target="_blank"></base></div>
            </aside>
          </article>
          <article id="base-target-_self" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_self&quot;" data-clipboard-text="target=&quot;_self&quot;">
                      "_self"
                  </code>
                </h4>
              <div class="value-description">
                <p>Откроет в текущей вкладке.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><base  href="{{site.url}}" target="_self"></base></div>
            </aside>
          </article>
          <article id="base-target-_parent" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_parent&quot;" data-clipboard-text="target=&quot;_parent&quot;">
                      "_parent"
                  </code>
                </h4>
              <div class="value-description">
                <p>Откроет в родительском всплывающем окне, используйте <code>_self</code> если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><base  href="{{site.url}}" target="_parent"></base></div>
            </aside>
          </article>
          <article id="base-target-_top" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_top&quot;" data-clipboard-text="target=&quot;_top&quot;">
                      "_top"
                  </code>
                </h4>
              <div class="value-description">
                <p>Откроет в верхнем всплывающем окне, используйте <code>_self</code> если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><base  href="{{site.url}}" target="_top"></base></div>
            </aside>
          </article>
      </div>
    </article>
</section>

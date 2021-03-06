---
layout: single
elementName: link
---

<section id="link" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/link/" data-element-name="link" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="link">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/link" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#link">
        <span>#</span>
        link
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>связь</strong> между текущей веб-страницей и внешней ссылкой или ресурсом.
    </div>
  </header>

      <div id="link-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#link-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="link-example-0-code" class="example-code">{% highlight html %}<link rel="stylesheet" type="text/css" href="{{site.url}}/css/website.css">{% endhighlight %}</div>
        </article>
      </div>

    <article id="link-href" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="href">
            href
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет URL-адрес ссылки.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="link-href-siteurlcsswebsitecss" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;{{site.url}}/css/website.css&quot;" data-clipboard-text="href=&quot;{{site.url}}/css/website.css&quot;">
                      "{{site.url}}/css/website.css"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете ввести <strong>абсолютный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  href="{{site.url}}/css/website.css"></link></div>
            </aside>
          </article>
          <article id="link-href-csswebsitecss" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;/css/website.css&quot;" data-clipboard-text="href=&quot;/css/website.css&quot;">
                      "/css/website.css"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете ввести URL-адрес <strong>относительно</strong> корневого домена.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  href="/css/website.css"></link></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="link-rel" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="rel">
            rel
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types">тип ссылки</a>, объясняя, как ссылка относится к текущей веб-странице.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="link-rel-stylesheet" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rel=&quot;stylesheet&quot;" data-clipboard-text="rel=&quot;stylesheet&quot;">
                      "stylesheet"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на таблицу стилей.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  rel="stylesheet"></link></div>
            </aside>
          </article>
          <article id="link-rel-icon" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rel=&quot;icon&quot;" data-clipboard-text="rel=&quot;icon&quot;">
                      "icon"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на значек.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  rel="icon"></link></div>
            </aside>
          </article>
          <article id="link-rel-author" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rel=&quot;author&quot;" data-clipboard-text="rel=&quot;author&quot;">
                      "author"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на  веб-сайт автора.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  rel="author"></link></div>
            </aside>
          </article>
          <article id="link-rel-next" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rel=&quot;next&quot;" data-clipboard-text="rel=&quot;next&quot;">
                      "next"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на следующую страницу.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  rel="next"></link></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="link-type" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="type">
            type
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет тип ссылочного ресурса.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="link-type-textcss" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;text/css&quot;" data-clipboard-text="type=&quot;text/css&quot;">
                      "text/css"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на CSS файл.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  type="text/css"></link></div>
            </aside>
          </article>
          <article id="link-type-texthtml" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;text/html&quot;" data-clipboard-text="type=&quot;text/html&quot;">
                      "text/html"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ссылка на HTML документ.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><link  type="text/html"></link></div>
            </aside>
          </article>
      </div>
    </article>
</section>

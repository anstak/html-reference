---
layout: single
elementName: script
---

<section id="script" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/script/" data-element-name="script" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="script">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/script" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#script">
        <span>#</span>
        script
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет контейнер для <strong>внешнего скрипта</strong>.</p>

    </div>
  </header>

      <div id="script-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#script-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="script-example-0-code" class="example-code">{% highlight html %}<script src="{{site.url}}/javascript/my-scripts.js"></script>{% endhighlight %}</div>
        </article>
      </div>
      <div id="script-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#script-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="script-example-1-code" class="example-code">{% highlight html %}<script type="text/javascript">
  console.log('Hello World');
</script>{% endhighlight %}</div>
        </article>
      </div>

    <article id="script-src" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="src">
            src
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет источник внешнего скрипта.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="script-src-javascriptmy-scriptsjs" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;/javascript/my-scripts.js&quot;" data-clipboard-text="src=&quot;/javascript/my-scripts.js&quot;">
                      "/javascript/my-scripts.js"
                  </code>
                </h4>
              <div class="value-description">
                <p>URL-адрес может быть относительным или абсолютным.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><script  src="/javascript/my-scripts.js"></script></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="script-type" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="type">
            type
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">MIME-тип</a> внешнего скрипта.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="script-type-textjavascript" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;text/javascript&quot;" data-clipboard-text="type=&quot;text/javascript&quot;">
                      "text/javascript"
                  </code>
                </h4>
              <div class="value-description">
                <p>Это для <code>.js</code> файлов.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><script  type="text/javascript"></script></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="script-async" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="async">
            async
          </code>
        </h3>
        <div class="attribute-description">
          <p>Позволяет загружать внешний скрипт асинхронно.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="script-async-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><script  async></script></div>
            </aside>
          </article>
      </div>
    </article>
</section>

---
layout: single
elementName: meta
---

<section id="meta" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/meta/" data-element-name="meta" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="meta">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/meta" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#meta">
        <span>#</span>
        meta
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>метаданные</strong>, прикрепленные к веб-странице.</p>

    </div>
  </header>

      <div id="meta-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#meta-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="meta-example-0-code" class="example-code">{% highlight html %}<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ffffff">{% endhighlight %}</div>
        </article>
      </div>
      <div id="meta-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#meta-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="meta-example-1-code" class="example-code">{% highlight html %}<!-- Обновляйте страницу каждые 5 минут -->
<meta http-equiv="refresh" content="5">{% endhighlight %}</div>
        </article>
      </div>
      <div id="meta-example-2" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#meta-example-2-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
          <div id="meta-example-2-code" class="example-code">{% highlight html %}<!-- Мгновенно перенаправляет на http://cssreference.io -->
<meta http-equiv="refresh" content="0; url=http://cssreference.io">{% endhighlight %}</div>
        </article>
      </div>

    <article id="meta-charset" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="charset">
            charset
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет кодировку символов для всей веб-страницы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meta-charset-utf-8" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать charset=&quot;UTF-8&quot;" data-clipboard-text="charset=&quot;UTF-8&quot;">
                      "UTF-8"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение должно быть допустимым <a href="https://www.iana.org/assignments/character-sets/character-sets.xhtml">набором символов</a>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  charset="UTF-8"></meta></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meta-http-equiv" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="http-equiv">
            http-equiv
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет мета-правила веб-страницы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meta-http-equiv-content-security-policy" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать http-equiv=&quot;Content-Security-Policy&quot;" data-clipboard-text="http-equiv=&quot;Content-Security-Policy&quot;">
                      "Content-Security-Policy"
                  </code>
                </h4>
              <div class="value-description">
                <p>Определяет ссылку на <a href="https://developer.mozilla.org/en-US/docs/Web/Security/CSP/CSP_policy_directives">политику содержимого </a> всей веб-страницы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  http-equiv="Content-Security-Policy"></meta></div>
            </aside>
          </article>
          <article id="meta-http-equiv-refresh" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать http-equiv=&quot;refresh&quot;" data-clipboard-text="http-equiv=&quot;refresh&quot;">
                      "refresh"
                  </code>
                </h4>
              <div class="value-description">
                <p>Позволяет обновлять страницу каждые n-секунд, и даже перенаправлять на другой URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  http-equiv="refresh"></meta></div>
            </aside>
          </article>
          <article id="meta-http-equiv-x-ua-compatible" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать http-equiv=&quot;X-UA-Compatible&quot;" data-clipboard-text="http-equiv=&quot;X-UA-Compatible&quot;">
                      "X-UA-Compatible"
                  </code>
                </h4>
              <div class="value-description">
                <p>Определяет версию браузера, через которую возможно отображение веб-страницы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  http-equiv="X-UA-Compatible"></meta></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meta-name" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет дополнительную информацию, прикрепленную к веб-странице.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meta-name-viewport" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;viewport&quot;" data-clipboard-text="name=&quot;viewport&quot;">
                      "viewport"
                  </code>
                </h4>
              <div class="value-description">
                <p>Определяет правила измерения и масштабирования.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  name="viewport"></meta></div>
            </aside>
          </article>
          <article id="meta-name-theme-color" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;theme-color&quot;" data-clipboard-text="name=&quot;theme-color&quot;">
                      "theme-color"
                  </code>
                </h4>
              <div class="value-description">
                <p>Определяет цвет темы, который может использоваться браузером или операционной системой.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  name="theme-color"></meta></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meta-content" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="content">
            content
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет содержимое метаданных. Зависит от значения аттрибутов <code>name</code> и <code>http-equiv</code>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meta-content-widthdevice-width-initial-scale1" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать content=&quot;width&#x3D;device-width, initial-scale&#x3D;1&quot;" data-clipboard-text="content=&quot;width&#x3D;device-width, initial-scale&#x3D;1&quot;">
                      "width&#x3D;device-width, initial-scale&#x3D;1"
                  </code>
                </h4>
              <div class="value-description">
                <p>Для метаданных типа <code>viewport</code>, вы можете указать ширину и начальный масштаб веб-страницы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  content="width=device-width, initial-scale=1"></meta></div>
            </aside>
          </article>
          <article id="meta-content-2-urlhttpcssreferenceio" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать content=&quot;2; url&#x3D;http://cssreference.io&quot;" data-clipboard-text="content=&quot;2; url&#x3D;http://cssreference.io&quot;">
                      "2; url&#x3D;http://cssreference.io"
                  </code>
                </h4>
              <div class="value-description">
                <p>Для метаданных типа <code>refresh</code>, вы можете указать сколько секунд ждать перед перенаправлением на другой URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meta  content="2; url=http://cssreference.io"></meta></div>
            </aside>
          </article>
      </div>
    </article>
</section>

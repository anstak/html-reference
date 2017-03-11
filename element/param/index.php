---
layout: single
elementName: param
---

<section id="param" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Yes
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/param/" data-element-name="param" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="param">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/param" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#param">
        <span>#</span>
        param
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>параметр</strong> для элемента <code>&lt;object&gt;</code>.</p>

    </div>
  </header>

      <div id="param-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#param-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><object type="application/x-shockwave-flash" data="/assets/golf.swf" width="800" height="360">
  <param name="movie" value="/assets/golf.swf">
  <param name="wmode" value="transparent">
  <p>Вам нужно подключить Flash что бы увидеть содержимое.</p>
</object></div>
          <div id="param-example-0-code" class="example-code">{% highlight html %}<object type="application/x-shockwave-flash" data="/assets/golf.swf" width="800" height="360">
  <param name="movie" value="/assets/golf.swf">
  <param name="wmode" value="transparent">
  <p>Вам нужно подключить Flash что бы увидеть содержимое.</p>
</object>{% endhighlight %}</div>
        </article>
      </div>

    <article id="param-name" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Имя параметра.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="param-name-movie" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;movie&quot;" data-clipboard-text="name=&quot;movie&quot;">
                      "movie"
                  </code>
                </h4>
              <div class="value-description">
                <p>Объект - это видео, которому требуется URL-адрес с типом файла <code>.swf</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><param  name="movie"></param></div>
            </aside>
          </article>
          <article id="param-name-wmode" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;wmode&quot;" data-clipboard-text="name=&quot;wmode&quot;">
                      "wmode"
                  </code>
                </h4>
              <div class="value-description">
                <p>Обработка фона обьекта.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><param  name="wmode"></param></div>
            </aside>
          </article>
          <article id="param-name-allowfullscreen" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;allowFullScreen&quot;" data-clipboard-text="name=&quot;allowFullScreen&quot;">
                      "allowFullScreen"
                  </code>
                </h4>
              <div class="value-description">
                <p>Позволяет открыть обьект на полный экран.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><param  name="allowFullScreen"></param></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="param-value" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="value">
            value
          </code>
        </h3>
        <div class="attribute-description">
          <p>Значение связанное с параметром.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="param-value-assetsgolfswf" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;/assets/golf.swf&quot;" data-clipboard-text="value=&quot;/assets/golf.swf&quot;">
                      "/assets/golf.swf"
                  </code>
                </h4>
              <div class="value-description">
                <p>Эсли параметр это <code>видео</code>, значение должно быть URL-адресом к файлу видео.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><param  value="/assets/golf.swf"></param></div>
            </aside>
          </article>
          <article id="param-value-transparent" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;transparent&quot;" data-clipboard-text="value=&quot;transparent&quot;">
                      "transparent"
                  </code>
                </h4>
              <div class="value-description">
                <p>Если параметр <code>wmode</code>, значение будет либо <code>window</code>, либо <code>direct</code>, либо <code>transparent</code>, либо <code>opaque</code>, либо <code>gpu</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><param  value="transparent"></param></div>
            </aside>
          </article>
      </div>
    </article>
</section>

---
layout: single
elementName: button
---

<section id="button" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/button/" data-element-name="button" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="button">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/button" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#button">
        <span>#</span>
        button
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет кликабельную <strong>кнопку</strong>.</p>

    </div>
  </header>

      <div id="button-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#button-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><button>
  Отправить форму
</button></div>
          <div id="button-example-0-code" class="example-code">{% highlight html %}<button>
  Отправить форму
</button>{% endhighlight %}</div>
        </article>
      </div>

    <article id="button-name" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет уникальный идентификатор  кнопки которая находится в форме. Это позволяет серверу получать доступ к каждой кнопке(по её значению), которая была нажата.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="button-name-submit_button" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;submit_button&quot;" data-clipboard-text="name=&quot;submit_button&quot;">
                      "submit_button"
                  </code>
                </h4>
              <div class="value-description">
                <p>Именное значение кнопки должно быть уникальным в пределах содержимого контейнера <code>&lt;form&gt;</code> .</p>
<p>Оно может содержать только символы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые специальные символы такие как <code>-</code> <code>_</code>… но не пробелы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button  name="submit_button">Отправить форму</button></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="button-value" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="value">
            value
          </code>
        </h3>
        <div class="attribute-description">
          <p>Значение отправленное на сервер при отправке формы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="button-value-primary" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;primary&quot;" data-clipboard-text="value=&quot;primary&quot;">
                      "primary"
                  </code>
                </h4>
              <div class="value-description">
                <p>Сервер получит значение <code>primary</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button  value="primary">Отправить форму</button></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="button-type" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="type">
            type
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет тип кнопки.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="button-type-submit" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;submit&quot;" data-clipboard-text="type=&quot;submit&quot;">
                      "submit"
                  </code>
                </h4>
              <div class="value-description">
                <p>Кнопка отправляет данные с формы на сервер.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button  type="submit">Отправить форму</button></div>
            </aside>
          </article>
          <article id="button-type-reset" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;reset&quot;" data-clipboard-text="type=&quot;reset&quot;">
                      "reset"
                  </code>
                </h4>
              <div class="value-description">
                <p>Кнопка сброса обнуляет данные в форме.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button  type="reset">Сброс</button></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="button-disabled" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отключает кнопку.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="button-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button  disabled>Отправить форму</button></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="button-autofocus" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autofocus">
            autofocus
          </code>
        </h3>
        <div class="attribute-description">
          <p>Устанавливает фокус на элемент при загрузке веб-страницы.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="button-autofocus-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><button >Отправить форму</button></div>
            </aside>
          </article>
      </div>
    </article>
</section>

---
layout: single
elementName: details
---

<section id="details" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/details/" data-element-name="details" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="details">Поделиться</a>
        <a target="_blank" href="http://caniuse.com/#feat=details" data-tooltip="See on Can I use…" rel="external">Can I use</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/details" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#details">
        <span>#</span>
        details
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет переключаемый блок с краткой, дополнительной информацией.</p>

    </div>
  </header>

      <div id="details-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#details-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><details>
  <summary>Прочтите больше</summary>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra nec nulla vitae mollis.</p>
</details></div>
          <div id="details-example-0-code" class="example-code">{% highlight html %}<details>
  <summary>Прочтите больше</summary>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra nec nulla vitae mollis.</p>
</details>{% endhighlight %}</div>
        </article>
      </div>

    <article id="details-open" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="open">
            open
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, отображаются ли дополнительные сведения по умолчанию или нет.</p>
        </div>
      </header>

      <div class="attribute-values">
          <article id="details-open-true" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать open=&quot;true&quot;" data-clipboard-text="open=&quot;true&quot;">
                      "true"
                  </code>
                </h4>
              <div class="value-description">
                <p>Дополнительные сведения <strong>видимы</strong> по умолчанию.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><details  open="true"><summary>Прочтите больше</summary><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra nec nulla vitae mollis.</p></details></div>
            </aside>
          </article>
      </div>
    </article>
</section>

---
layout: single
elementName: bdo
---

<section id="bdo" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/bdo/" data-element-name="bdo" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="bdo">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/bdo" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#bdo">
        <span>#</span>
        bdo
      </a>
    </h2>
    <div class="element-description">
      <p>Позволяет переопределить направление текста.</p>

    </div>
  </header>

      <div id="bdo-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#bdo-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output">Слово <bdo dir="rtl">Привет</bdo> это "Привет" только наоборот.</div>
          <div id="bdo-example-0-code" class="example-code">{% highlight html %}Слово <bdo dir="rtl">Привет</bdo> это "Привет" только наоборот.{% endhighlight %}</div>
        </article>
      </div>

    <article id="bdo-dir" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="dir">
            dir
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет в каком направлении должен идти текст.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="bdo-dir-rtl" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать dir=&quot;rtl&quot;" data-clipboard-text="dir=&quot;rtl&quot;">
                      "rtl"
                  </code>
                </h4>
              <div class="value-description">
                <p>Текст идёт справа налево.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output">The word <bdo dir="rtl">Hello</bdo> is "Hello" spelled backwards.</div>
            </aside>
          </article>
          <article id="bdo-dir-ltr" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать dir=&quot;ltr&quot;" data-clipboard-text="dir=&quot;ltr&quot;">
                      "ltr"
                  </code>
                </h4>
              <div class="value-description">
                <p>Текст идёт слева направо.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output">The word <bdo dir="ltr">dlroW</bdo> is "World" spelled backwards.</div>
            </aside>
          </article>
      </div>
    </article>
</section>

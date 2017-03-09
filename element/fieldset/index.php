---
layout: single
elementName: fieldset
---

<section id="fieldset" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/fieldset/" data-element-name="fieldset" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="fieldset">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/fieldset" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#fieldset">
        <span>#</span>
        fieldset
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>группу элементов управления</strong> в пределах  формы.</p>
    </div>
  </header>

      <div id="fieldset-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#fieldset-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><form action="/subscribe" method="post">
  <fieldset>
    <legend>Подпишитесь на рассылку новостей</legend>
    <input type="email" name="email">
    <button>Ok</button>
  </fieldset>
</form></div>
          <div id="fieldset-example-0-code" class="example-code">{% highlight html %}<form action="/subscribe" method="post">
  <fieldset>
    <legend>Подпишитесь на рассылку новостей</legend>
    <input type="email" name="email">
    <button>Ok</button>
  </fieldset>
</form>{% endhighlight %}</div>
        </article>
      </div>

    <article id="fieldset-disabled" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отключает элементы управления, которые содержат наборы полей.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="fieldset-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><fieldset  disabled><legend>Подпишитесь на рассылку новостей</legend>
<input type="email" name="email">
<button>Ок</button></fieldset></div>
            </aside>
          </article>
      </div>
    </article>
</section>

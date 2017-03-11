---
layout: single
elementName: output
---

<section id="output" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/output/" data-element-name="output" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="output">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/output" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#output">
        <span>#</span>
        output
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет результат вычисления или других действий пользователя.</p>

    </div>
  </header>

      <div id="output-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#output-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><form oninput="sum.value = parseInt(a.value) + parseInt(b.value)">
  <input type="number" name="a" value="4">
  +
  <input type="number" name="b" value="7">
  =
  <output name="sum">11</output>
</form></div>
          <div id="output-example-0-code" class="example-code">{% highlight html %}<form oninput="sum.value = parseInt(a.value) + parseInt(b.value)">
  <input type="number" name="a" value="4">
  +
  <input type="number" name="b" value="7">
  =
  <output name="sum">11</output>
</form>{% endhighlight %}</div>
        </article>
      </div>

    <article id="output-name" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет уникальный идентификатор для входного значения в пределах формы. Это позволяет серверу получать доступ к каждому входному значению при его отправке.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="output-name-sum" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;sum&quot;" data-clipboard-text="name=&quot;sum&quot;">
                      "sum"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение имени должно быть уникальным в пределах содержимого контейнера <code>&lt;form&gt;</code>.</p>
<p>Может содержать только алфавитно-цифровые симоволы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые специальные символы, такие как <code>-</code> <code>_</code>… но не пробелы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><output  name="sum"></output></div>
            </aside>
          </article>
      </div>
    </article>
</section>

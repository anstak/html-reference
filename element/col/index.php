---
layout: single
elementName: col
---

<section id="col" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
        <span>
          Тип: <strong>inline (строчный)</strong>
        </span>
      <span>
        Самозакрывающийся:
        <strong>
            Yes
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/col/" data-element-name="col" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="col">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/col" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#col">
        <span>#</span>
        col
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>колонку</strong> в пределах таблицы.</p>

    </div>
  </header>

      <div id="col-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#col-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><table>
  <colgroup>
    <col style="background-color: hotpink;">
    <col span="2" style="background-color: springgreen;">
  </colgroup>
  <tr>
    <td>Джон Ленон</td>
    <td>Ритм Гитара</td>
    <td>1960–1969</td>
  </tr>
  <tr>
    <td>Пол Макартни</td>
    <td>Басс</td>
    <td>1960–1970</td>
  </tr>
  <tr>
    <td>Джордж Хариссон</td>
    <td>Соло гитара</td>
    <td>1960–1970</td>
  </tr>
  <tr>
    <td>Ринго Старр</td>
    <td>Барабаны</td>
    <td>1960–1970</td>
  </tr>
</table></div>
          <div id="col-example-0-code" class="example-code">{% highlight html %}<table>
  <colgroup>
    <col style="background-color: hotpink;">
    <col span="2" style="background-color: springgreen;">
  </colgroup>
  <tr>
    <td>Джон Ленон</td>
    <td>Ритм Гитара</td>
    <td>1960–1969</td>
  </tr>
  <tr>
    <td>Пол Макартни</td>
    <td>Басс</td>
    <td>1960–1970</td>
  </tr>
  <tr>
    <td>Джордж Хариссон</td>
    <td>Соло гитара</td>
    <td>1960–1970</td>
  </tr>
  <tr>
    <td>Ринго Старр</td>
    <td>Барабаны</td>
    <td>1960–1970</td>
  </tr>
</table>{% endhighlight %}</div>
        </article>
      </div>

    <article id="col-span" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="span">
            span
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет сколько колонок должен охватывать элемент.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="col-span-3" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать span=&quot;3&quot;" data-clipboard-text="span=&quot;3&quot;">
                      "3"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать числа.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><col  span="3"></col></div>
            </aside>
          </article>
      </div>
    </article>
</section>

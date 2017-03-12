---
layout: single
elementName: td
---

<section id="td" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/td/" data-element-name="td" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="td">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/td" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#td">
        <span>#</span>
        td
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>ячейку таблицы</strong>.</p>

    </div>
  </header>

      <div id="td-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#td-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><table>
  <thead>
    <tr>
      <th colspan="4">Победители Кубка Мира</th>
    </tr>
    <tr>
      <td colspan="2">Местоположение</td>
      <td colspan="2">Счёт</td>
    </tr>
    <tr>
      <td>Континент</td>
      <td>Страна</td>
      <td>Первая победа</td>
      <td>Всего побед</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="3">Южная Америка</td>
      <td>Уругвай</td>
      <td>1930</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Бразилия</td>
      <td>1958</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Аргентина</td>
      <td>1978</td>
      <td>2</td>
    </tr>
    <tr>
      <td rowspan="5">Европа</td>
      <td>Италия</td>
      <td>1934</td>
      <td>4</td>
    </tr>
    <tr>
      <td>Германия</td>
      <td>1954</td>
      <td>4</td>
    </tr>
    <tr>
      <td>Англия</td>
      <td>1966</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Франция</td>
      <td>1998</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Испания</td>
      <td>2010</td>
      <td>1</td>
    </tr>
  </tbody>
</table></div>
          <div id="td-example-0-code" class="example-code">{% highlight html %}<table>
  <thead>
    <tr>
      <th colspan="4">Победители Кубка Мира</th>
    </tr>
    <tr>
      <td colspan="2">Местоположение</td>
      <td colspan="2">Счёт</td>
    </tr>
    <tr>
      <td>Континент</td>
      <td>Страна</td>
      <td>Первая победа</td>
      <td>Всего побед</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="3">Южная Америка</td>
      <td>Уругвай</td>
      <td>1930</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Бразилия</td>
      <td>1958</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Аргентина</td>
      <td>1978</td>
      <td>2</td>
    </tr>
    <tr>
      <td rowspan="5">Европа</td>
      <td>Италия</td>
      <td>1934</td>
      <td>4</td>
    </tr>
    <tr>
      <td>Германия</td>
      <td>1954</td>
      <td>4</td>
    </tr>
    <tr>
      <td>Англия</td>
      <td>1966</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Франция</td>
      <td>1998</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Испания</td>
      <td>2010</td>
      <td>1</td>
    </tr>
  </tbody>
</table>{% endhighlight %}</div>
        </article>
      </div>

    <article id="td-colspan" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="colspan">
            colspan
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, сколько столбцов должна охватывать ячейка.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="td-colspan-3" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать colspan=&quot;3&quot;" data-clipboard-text="colspan=&quot;3&quot;">
                      "3"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать любое <strong>целое число</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><td  colspan="3"></td></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="td-rowspan" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="rowspan">
            rowspan
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, сколько строк должна занимать ячейка.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="td-rowspan-2" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rowspan=&quot;2&quot;" data-clipboard-text="rowspan=&quot;2&quot;">
                      "2"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать любое <strong>целое число</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><td  rowspan="2"></td></div>
            </aside>
          </article>
      </div>
    </article>
</section>

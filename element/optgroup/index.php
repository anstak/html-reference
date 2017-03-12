---
layout: single
elementName: optgroup
---

<section id="optgroup" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/optgroup/" data-element-name="optgroup" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="optgroup">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/optgroup" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#optgroup">
        <span>#</span>
        optgroup
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>группу </strong>элементов <code>&lt;option&gt;</code>.</p>

    </div>
  </header>

      <div id="optgroup-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#optgroup-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><select>
  <optgroup label="Южная Америка">
    <option>Уругвай</option>
    <option>Бразилия</option>
    <option>Аргентина</option>
  </optgroup>
  <optgroup label="Европа">
    <option>Италия</option>
    <option>Германия</option>
    <option>Англия</option>
    <option>Франция</option>
    <option>Испания</option>
  </optgroup>
</select></div>
          <div id="optgroup-example-0-code" class="example-code">{% highlight html %}<select>
  <optgroup label="Южная Америка">
    <option>Уругвай</option>
    <option>Бразилия</option>
    <option>Аргентина</option>
  </optgroup>
  <optgroup label="Европа">
    <option>Италия</option>
    <option>Германия</option>
    <option>Англия</option>
    <option>Франция</option>
    <option>Испания</option>
  </optgroup>
</select>{% endhighlight %}</div>
        </article>
      </div>
      <div id="optgroup-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#optgroup-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><select>
  <optgroup label="Зима">
    <option>Декабрь</option>
    <option>Январь</option>
    <option>Февраль</option>
    <option>Март</option>
  </optgroup>
  <optgroup label="Не зима" disabled>
    <option>Апрель</option>
    <option>Май</option>
    <option>Июнь</option>
    <option>Июль</option>
    <option>Август</option>
    <option>Сентябрь</option>
    <option>Октябрь</option>
    <option>Ноябрь</option>
  </optgroup>
</select></div>
          <div id="optgroup-example-1-code" class="example-code">{% highlight html %}<select>
  <optgroup label="Зима">
     <option>Декабрь</option>
    <option>Январь</option>
    <option>Февраль</option>
    <option>Март</option>
  </optgroup>
  <optgroup label="Не зима" disabled>
    <option>Апрель</option>
    <option>Май</option>
    <option>Июнь</option>
    <option>Июль</option>
    <option>Август</option>
    <option>Сентябрь</option>
    <option>Октябрь</option>
    <option>Ноябрь</option>
  </optgroup>
</select>{% endhighlight %}</div>
        </article>
      </div>

    <article id="optgroup-label" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="label">
            label
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет метку всей группы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="optgroup-label-south-america" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать label=&quot;South America&quot;" data-clipboard-text="label=&quot;South America&quot;">
                      "South America"
                  </code>
                </h4>
              <div class="value-description">
                <p>Метка не может быть выбрана.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select>
  <optgroup label="Южная Америка">
      <option>Уругвай</option>
    <option>Бразилия</option>
    <option>Аргентина</option>
  </optgroup>
  <optgroup label="Европа">
    <option>Италия</option>
    <option>Германия</option>
    <option>Англия</option>
    <option>Франция</option>
    <option>Испания</option>
  </optgroup>
</select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="optgroup-disabled" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отключает все элементы <code>&lt;option&gt;</code> группы.</p>

            <strong class="attribute-is-novalue">Значение не обязательно.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="optgroup-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><optgroup  disabled></optgroup></div>
            </aside>
          </article>
      </div>
    </article>
</section>

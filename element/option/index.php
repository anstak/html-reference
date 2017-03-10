---
layout: single
elementName: option
---

<section id="option" class="element">
  <header class="element-header">
    <nav translate="no" class="notranslate element-links">
      <span>
        Самозакрывающийся:
        <strong>
            Нет
        </strong>
      </span>
      <a class="element-links-direct" href="{{site.url}}/element/option/" data-element-name="option" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="option">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/option" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#option">
        <span>#</span>
        option
      </a>
    </h2>
    <div class="element-description">
      <p>Опрелеляет <strong>опцию</strong> в пределах <code>&lt;select&gt;</code> выпадающего списка.</p>

    </div>
  </header>

      <div id="option-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#option-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><select name="country">
  <option value="Argentina">Аргентина</option>
  <option value="Bolivia">Боливия</option>
  <option value="Brazil">Бразилия</option>
  <option value="Chile">Чили</option>
  <option value="Colombia">Колумбия</option>
  <option value="Ecuador">Эквадор</option>
  <option value="Guyana">Гуана</option>
  <option value="Paraguay">Парагвай</option>
  <option value="Peru">Перу</option>
  <option value="Suriname">Суринам</option>
  <option value="Uruguay">Уругвай</option>
  <option value="Venezuela">Венесуэла</option>
</select></div>
          <div id="option-example-0-code" class="example-code">{% highlight html %}<select name="country">
  <option value="Argentina">Аргентина</option>
  <option value="Bolivia">Боливия</option>
  <option value="Brazil">Бразилия</option>
  <option value="Chile">Чили</option>
  <option value="Colombia">Колумбия</option>
  <option value="Ecuador">Эквадор</option>
  <option value="Guyana">Гуана</option>
  <option value="Paraguay">Парагвай</option>
  <option value="Peru">Перу</option>
  <option value="Suriname">Суринам</option>
  <option value="Uruguay">Уругвай</option>
  <option value="Venezuela">Венесуэла</option>
</select>{% endhighlight %}</div>
        </article>
      </div>

    <article id="option-value" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="value">
            value
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет значение элемента <code>&lt;select&gt;</code> если используется <code>option</code>.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="option-value-south-africa" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;south-africa&quot;" data-clipboard-text="value=&quot;south-africa&quot;">
                      "south-africa"
                  </code>
                </h4>
              <div class="value-description">
                <p>Это значение будет отослано на сервер, когда форма будет отправлена.</p>

{% highlight html %}
<select>
  <option value="south-africa">Южная Африка</option>
</select>
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select>
  <option value="south-africa">Южная Африка</option>
</select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="option-label" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="label">
            label
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет метку опции</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="option-label-republic-of-south-africa" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать label=&quot;Republic of South Africa&quot;" data-clipboard-text="label=&quot;Republic of South Africa&quot;">
                      "Република Южной Африки"
                  </code>
                </h4>
              <div class="value-description">
                <p>Метка заменит текст опции.</p>

{% highlight html %}
<select>
  <option value="south-africa" label="Република Южной Африки">Южная Африка</option>
</select>
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select>
  <option value="south-africa" label="Република Южной Африки">Южная Африка</option>
</select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="option-disabled" class="attribute attribute--novaluebut">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отлючает опцию.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="option-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                <p>Опция останется видимой, но больше не будет выбираться.</p>

{% highlight html %}
<select>
  <option>Понедельник</option>
  <option>Вторник</option>
  <option disabled>Среда</option>
  <option disabled>Четверг</option>
  <option>Пятница</option>
  <option>Суббота</option>
  <option>Воскресенье</option>
</select>
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select>
 <option>Понедельник</option>
  <option>Вторник</option>
  <option disabled>Среда</option>
  <option disabled>Четверг</option>
  <option>Пятница</option>
  <option>Суббота</option>
  <option>Воскресенье</option>
</select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="option-selected" class="attribute attribute--novaluebut">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="selected">
            selected
          </code>
        </h3>
        <div class="attribute-description">
          <p>Выбирает опцию при загрузке веб-страницы.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="option-selected-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
{% highlight html %}
<select>
  <option>Понедельник</option>
  <option>Вторник</option>
  <option>Среда</option>
  <option>Четверг</option>
  <option selected>Пятница</option>
  <option>Суббота</option>
  <option>Воскресенье</option>
</select>
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select>
    <option>Понедельник</option>
  <option>Вторник</option>
  <option>Среда</option>
  <option>Четверг</option>
  <option selected>Пятница</option>
  <option>Суббота</option>
  <option>Воскресенье</option>
</select></div>
            </aside>
          </article>
      </div>
    </article>
</section>

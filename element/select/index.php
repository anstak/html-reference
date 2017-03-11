---
layout: single
elementName: select
---

<section id="select" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/select/" data-element-name="select" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="select">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/select" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#select">
        <span>#</span>
        select
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>раскрывающееся меню выбора</strong> c разными элементами - <code>&lt;option&gt;</code>.</p>

    </div>
  </header>

      <div id="select-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#select-example-0-code">Копировать</a>
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
          <div id="select-example-0-code" class="example-code">{% highlight html %}<select name="country">
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

    <article id="select-name" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет уникальный идентификатор  для <code>&lt;select&gt;</code> в пределах формы.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="select-name-countries" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;countries&quot;" data-clipboard-text="name=&quot;countries&quot;">
                      "countries"
                  </code>
                </h4>
              <div class="value-description">
                <p>Имя должно быть уникальным в пределах содержимого контейнера <code>&lt;form&gt;</code>.</p>
<p>Может содержать только буквенно-цифровые символы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые специальные символы как <code>-</code> <code>_</code>… но не пробелы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select  name="countries"><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="select-size" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="size">
            size
          </code>
        </h3>
        <div class="attribute-description">
          <p>Когда присутствует элемент <code>multiple</code>, определяет высоту списка выбора</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="select-size-12" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать size=&quot;12&quot;" data-clipboard-text="size=&quot;12&quot;">
                      "12"
                  </code>
                </h4>
              <div class="value-description">
                <p>вы можете использовать любое <strong>целочисленное</strong> значение.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select  multiple size="12"><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="select-multiple" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="multiple">
            multiple
          </code>
        </h3>
        <div class="attribute-description">
          <p>Позволяет выбрать сразу несколько элементов <code>&lt;option&gt;</code>.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="select-multiple-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select  multiple><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="select-autofocus" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autofocus">
            autofocus
          </code>
        </h3>
        <div class="attribute-description">
          <p>Фокусирует пользователя на элементе <code>&lt;select&gt;</code> при загрузке веб-страницы.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="select-autofocus-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select ><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="select-disabled" class="attribute attribute--novalue">
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
          <article id="select-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select  disabled><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="select-required" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="required">
            required
          </code>
        </h3>
        <div class="attribute-description">
          <p>Сообщает браузеру что элемент <code>&lt;select&gt;</code> - <strong>обязателен</strong>. Если оставить его пустым, высветится предупреждение.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="select-required-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><select  required><option value="Argentina">Аргентина</option>
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
  <option value="Venezuela">Венесуэла</option></select></div>
            </aside>
          </article>
      </div>
    </article>
</section>

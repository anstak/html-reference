---
layout: single
elementName: progress
---

<section id="progress" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/progress/" data-element-name="progress" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="progress">Поделиться</a>
        <a target="_blank" href="http://caniuse.com/#feat=progress" data-tooltip="See on Can I use…" rel="external">Can I use</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/progress" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#progress">
        <span>#</span>
        progress
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>индикатор заполнения</strong>.</p>

    </div>
  </header>

      <div id="progress-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#progress-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><progress value="0.7">Прогресс</progress></div>
          <div id="progress-example-0-code" class="example-code">{% highlight html %}<progress value="0.7">Прогресс</progress>{% endhighlight %}</div>
        </article>
      </div>
      <div id="progress-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#progress-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><progress value="71" max="100">Алекс</progress><br>
<progress value="16" max="100">Брендон</progress><br>
<progress value="40" max="100">Шарлотта</progress><br>
<progress value="92" max="100">Сэм</progress>
</div>
          <div id="progress-example-1-code" class="example-code">{% highlight html %}<progress value="71" max="100">Алекс</progress><br>
<progress value="16" max="100">Брендон</progress><br>
<progress value="40" max="100">Шарлотта</progress><br>
<progress value="92" max="100">Сэм</progress>
{% endhighlight %}</div>
        </article>
      </div>

    <article id="progress-value" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="value">
            value
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет значение индикатора заполнения по шкале, определяемой атрибутом <code>max</code>.</p>
 
            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="progress-value-07" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;0.7&quot;" data-clipboard-text="value=&quot;0.7&quot;">
                      "0.7"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа. Они должны быть между <code>min</code> и <code>max</code> значением.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><progress  value="0.7"></progress></div>
            </aside>
          </article>
          <article id="progress-value-42" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;-42&quot;" data-clipboard-text="value=&quot;-42&quot;">
                      "-42"
                  </code>
                </h4>
              <div class="value-description">
                <p>Если вы используете значение ниже минимального, индикатор заполнения будет пуст.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><progress  value="-42"></progress></div>
            </aside>
          </article>
          <article id="progress-value-63" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;63&quot;" data-clipboard-text="value=&quot;63&quot;">
                      "63"
                  </code>
                </h4>
              <div class="value-description">
                <p>Если вы используете значение выше максимального, индикатор заполнения будет заполнен.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><progress  value="63"></progress></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="progress-max" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="max">
            max
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет максимально возможное значение доступное на шкале заполнения .</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="progress-max-1" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать max=&quot;1&quot;" data-clipboard-text="max=&quot;1&quot;">
                      "1"
                  </code>
                </h4>
              <div class="value-description">
                  <strong class="value-is-default">Default.</strong>
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><progress  value="0.7" max="1"></progress></div>
            </aside>
          </article>
          <article id="progress-max-100" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать max=&quot;100&quot;" data-clipboard-text="max=&quot;100&quot;">
                      "100"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><progress  value="40" max="100"></progress></div>
            </aside>
          </article>
      </div>
    </article>
</section>

---
layout: single
elementName: meter
---

<section id="meter" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/meter/" data-element-name="meter" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="meter">Поделиться</a>
        <a target="_blank" href="http://caniuse.com/#feat=meter" data-tooltip="See on Can I use…" rel="external">Can I use</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/meter" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#meter">
        <span>#</span>
        meter
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>горизонтальный измеритель</strong>.</p>

    </div>
  </header>

      <div id="meter-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#meter-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><meter value="0.7">Прогресс</meter></div>
          <div id="meter-example-0-code" class="example-code">{% highlight html %}<meter value="0.7">Progress</meter>{% endhighlight %}</div>
        </article>
      </div>
      <div id="meter-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#meter-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><meter min="0" low="16" value="71" high="92" max="100">Алекс</meter><br>
<meter min="0" low="16" value="16" high="92" max="100">Брэндон</meter><br>
<meter min="0" low="16" value="40" high="92" max="100">Шарлотта</meter><br>
<meter min="0" low="16" value="92" high="92" max="100">Сэм</meter>
</div>
          <div id="meter-example-1-code" class="example-code">{% highlight html %}<meter min="0" low="16" value="71" high="92" max="100">Алекс</meter><br>
<meter min="0" low="16" value="16" high="92" max="100">Брэндон</meter><br>
<meter min="0" low="16" value="40" high="92" max="100">Шарлотта</meter><br>
<meter min="0" low="16" value="92" high="92" max="100">Сэм</meter>
{% endhighlight %}</div>
        </article>
      </div>

    <article id="meter-value" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="value">
            value
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет значение измерителя в масштабе, определяемом с помощью атрибута <code>max</code>.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="meter-value-07" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;0.7&quot;" data-clipboard-text="value=&quot;0.7&quot;">
                      "0.7"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа. Они должны находиться между <code>min</code> и <code>max</code> значениями.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  value="0.7"></meter></div>
            </aside>
          </article>
          <article id="meter-value-42" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;-42&quot;" data-clipboard-text="value=&quot;-42&quot;">
                      "-42"
                  </code>
                </h4>
              <div class="value-description">
                <p>Если вы используете значение которое ниже минимума, то измеритель будет пустым.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  value="-42"></meter></div>
            </aside>
          </article>
          <article id="meter-value-63" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать value=&quot;63&quot;" data-clipboard-text="value=&quot;63&quot;">
                      "63"
                  </code>
                </h4>
              <div class="value-description">
                <p>Если вы используете значение выше максимального, измеритель будет заполнен.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  value="63"></meter></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meter-max" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="max">
            max
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет максимальное значение, возможное на измерителе.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meter-max-1" class="value">
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
              <div class="value-output"><meter  value="0.7" max="1"></meter></div>
            </aside>
          </article>
          <article id="meter-max-100" class="value">
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
              <div class="value-output"><meter  value="40" max="100"></meter></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meter-min" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="min">
            min
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет минимальное значение, возможное на измерителе.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meter-min-0" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать min=&quot;0&quot;" data-clipboard-text="min=&quot;0&quot;">
                      "0"
                  </code>
                </h4>
              <div class="value-description">
                  <strong class="value-is-default">Default.</strong>
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  min="0"></meter></div>
            </aside>
          </article>
          <article id="meter-min-150" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать min=&quot;-150&quot;" data-clipboard-text="min=&quot;-150&quot;">
                      "-150"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>десятичные дроби</strong> и <strong>отрицательные</strong> числа.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  min="-150"></meter></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meter-low" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="low">
            low
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет самое низкое значение в диапазоне, определенном измерителем.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meter-low-016" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать low=&quot;0.16&quot;" data-clipboard-text="low=&quot;0.16&quot;">
                      "0.16"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение должно быть больше <code>min</code> и меньше чем <code>high</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  low="0.16"></meter></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="meter-high" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="high">
            high
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет самое высокое значение в диапазоне, определенном измерителем.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="meter-high-092" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать high=&quot;0.92&quot;" data-clipboard-text="high=&quot;0.92&quot;">
                      "0.92"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение должно быть меньше чем <code>max</code> и больше чем <code>low</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><meter  high="0.92"></meter></div>
            </aside>
          </article>
      </div>
    </article>
</section>

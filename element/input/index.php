---
layout: single
elementName: input
---

<section id="input" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/input/" data-element-name="input" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="input">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/input" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#input">
        <span>#</span>
        input
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>интерактивный элемент управления</strong> в веб-форме.</p>

    </div>
  </header>

      <div id="input-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#input-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><input type="text" name="first_name" placeholder="e.g. Alex"></div>
          <div id="input-example-0-code" class="example-code">{% highlight html %}<input type="text" name="first_name" placeholder="e.g. Alex">{% endhighlight %}</div>
        </article>
      </div>

    <article id="input-type" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="type">
            type
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет тип ввода в форме.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="input-type-text" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;text&quot;" data-clipboard-text="type=&quot;text&quot;">
                      "text"
                  </code>
                </h4>
              <div class="value-description">
                <p>Простой однострочный ввод текста, который принимает любой тип символов</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="text"></input></div>
            </aside>
          </article>
          <article id="input-type-email" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;email&quot;" data-clipboard-text="type=&quot;email&quot;">
                      "email"
                  </code>
                </h4>
              <div class="value-description">
                <p>Как текстовый ввод, но браузер будет позволять вводить только достоверные адреса электронной почты.</p>
<p>На мобильных устройствах будет отображаться клавиатура электронной почты.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="email"></input></div>
            </aside>
          </article>
          <article id="input-type-number" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;number&quot;" data-clipboard-text="type=&quot;number&quot;">
                      "number"
                  </code>
                </h4>
              <div class="value-description">
                <p>Как текстовый ввод, но браузер будет позволять вводить только числовые значения.</p>
<p>На мобильных устройствах будет отображаться клавиатура с числами.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="number"></input></div>
            </aside>
          </article>
          <article id="input-type-checkbox" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;checkbox&quot;" data-clipboard-text="type=&quot;checkbox&quot;">
                      "checkbox"
                  </code>
                </h4>
              <div class="value-description">
                <p>Флажок переключения, который может быть только одним из двух состояний: отмечен или не отмечен. Значение передается только формой, если флажок отмечен.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="checkbox"></input></div>
            </aside>
          </article>
          <article id="input-type-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                <p>Вы можете обернуть флажок в метку, что бы увеличить область нажатия.</p>

{% highlight html %}
<label>
  <input type="checkbox">
  Я принимаю правила и условия
</label>
{% endhighlight %}
<p>Обратите внимание на то, как щелчок по тексту переключает флажок.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><label>
  <input type="checkbox">
  Я принимаю правила и условия
</label></div>
            </aside>
          </article>
          <article id="input-type-radio" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;radio&quot;" data-clipboard-text="type=&quot;radio&quot;">
                      "radio"
                  </code>
                </h4>
              <div class="value-description">
                <p>Используется в сочетании с другими радиокнопками, чтобы они были взаимоисключающими.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="radio"></input></div>
            </aside>
          </article>
          <article id="input-type-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                <p>Связывайте переключатели через аналогичное значение их имени - <code>name</code>:</p>

{% highlight html %}
<label>
  <input type="radio" name="newsletter" value="yes">
  Yes
</label>
<label>
  <input type="radio" name="newsletter" value="no">
  No
</label>
{% endhighlight %}
<p>Обратите внимание, как одно нажатие обнуляет другой флажок.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><label>
  <input type="radio" name="newsletter" value="yes">
  Yes
</label>
<label>
  <input type="radio" name="newsletter" value="no">
  No
</label></div>
            </aside>
          </article>
          <article id="input-type-submit" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать type=&quot;submit&quot;" data-clipboard-text="type=&quot;submit&quot;">
                      "submit"
                  </code>
                </h4>
              <div class="value-description">
                <p>Кнопка "отправить", запускается при клике или при нажатии Enter.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  type="submit"></input></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="input-name" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет уникальный идентификатор для входного значения в форме. Он позволяет получать серверу доступ к каждому входному значению при его отправке.</p>
          
            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="input-name-first_name" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;first_name&quot;" data-clipboard-text="name=&quot;first_name&quot;">
                      "first_name"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение <code>name</code> должно быть уникальным в пределах содержимого контейнера <code>&lt;form&gt;</code>.</p>
<p>Может содержать только алфавитно-цифровые символы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые специальные символы как <code>-</code> <code>_</code>… но не пробелы.</p>
 <form>.
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  name="first_name"></input></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="input-placeholder" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="placeholder">
            placeholder
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет текст-заполнитель который виден только тогда, когда поле ввода постое.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="input-placeholder-eg-alexsmithcom" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать placeholder=&quot;e.g. alex@smith.com&quot;" data-clipboard-text="placeholder=&quot;e.g. alex@smith.com&quot;">
                      "e.g. alex@smith.com"
                  </code>
                </h4>
              <div class="value-description">
                <p>Тут вы можете указать формат, ожидаемый для ввода.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  placeholder="e.g. alex@smith.com"></input></div>
            </aside>
          </article>
          <article id="input-placeholder-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                <p>Рекомендуется использовать <code>&lt;label&gt;</code> для описания ввода и использовать текст-заполнитель, чтобы продемонстрировать пример:</p>

{% highlight html %}
<form>
  <label>Email</label><br>
  <input type="email" name="email" placeholder="e.g. alex@smith.com">
</form>
{% endhighlight %}
<p>Обратите внимание, как текст-заполнитель исчезает при вводе символов, поэтому следует использовать отдельный <code>&lt;label&gt;</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form>
  <label>Email</label><br>
  <input type="email" name="email" placeholder="e.g. alex@smith.com">
</form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="input-required" class="attribute attribute--novaluebut">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="required">
            required
          </code>
        </h3>
        <div class="attribute-description">
          <p>Указывает браузеру, что этот ввод <strong>обязателен</strong>. Если оставить его пустым, появится предупреждение.</p>
          
            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="input-required-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                <p>Вам просто нужно добавить аттрибут <code>required</code> без значения:</p>

{% highlight html %}
<form>
  <input type="text" required>
</form>
{% endhighlight %}
<p>Браузер должен показывать предупреждение, если вы попытаетесь отправить пустую форму.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form>
  <input type="text" required>
</form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="input-disabled" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отключает ввод.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="input-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><input  disabled></input></div>
            </aside>
          </article>
      </div>
    </article>
</section>

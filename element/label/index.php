---
layout: single
elementName: label
---

<section id="label" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/label/" data-element-name="label" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="label">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/label" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#label">
        <span>#</span>
        label
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>этикетку</strong> для элементов управления формой.</p>

    </div>
  </header>

      <div id="label-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#label-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><label for="first_name">Имя</label>
<br>
<input type="text" name="first_name" id="first_name"></div>
          <div id="label-example-0-code" class="example-code">{% highlight html %}<label for="first_name">Имя</label>
<br>
<input type="text" name="first_name" id="first_name">{% endhighlight %}</div>
        </article>
      </div>
      <div id="label-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#label-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><label>
  <input type="checkbox" name="terms">
  Я согласен с условиями
</label></div>
          <div id="label-example-1-code" class="example-code">{% highlight html %}<label>
  <input type="checkbox" name="terms">
  Я согласен с условиями
</label>{% endhighlight %}</div>
        </article>
      </div>
      <div id="label-example-2" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#label-example-2-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><p>Подписаться на рассылку?</p>
<label>
  <input type="radio" name="newsletter" value="yes"> Да
</label>
<label>
  <input type="radio" name="newsletter" value="no"> Нет
</label></div>
          <div id="label-example-2-code" class="example-code">{% highlight html %}<p>Подписаться на рассылку?</p>
<label>
  <input type="radio" name="newsletter" value="yes"> Да
</label>
<label>
  <input type="radio" name="newsletter" value="no"> Нет
</label>{% endhighlight %}</div>
        </article>
      </div>

    <article id="label-for" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="for">
            for
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, <em>с какими</em> элементами управления связана этикетка.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="label-for-last_name" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать for=&quot;last_name&quot;" data-clipboard-text="for=&quot;last_name&quot;">
                      "last_name"
                  </code>
                </h4>
              <div class="value-description">
                <p>Нажатие на этикетку перенесет печать на ту форму где <code>id</code> будет тот же что и у <code>last_name</code>.</p>

{% highlight html %}
<label for="last_name">Фамилия</label>
<br>
<input type="text" name="last_name" id="last_name">
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><label for="last_name">Фамилия</label>
<br>
<input type="text" name="last_name" id="last_name"></div>
            </aside>
          </article>
      </div>
    </article>
</section>

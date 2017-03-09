---
layout: single
elementName: form
---

<section id="form" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/form/" data-element-name="form" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="form">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/form" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#form">
        <span>#</span>
        form
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>интерактивную форму</strong> с элементами управления.</p>
    </div>
  </header>

      <div id="form-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#form-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><form action="/signup" method="post">
  <p>
    <label>Титул</label><br>
    <label>
      <input type="radio" name="title" value="mr">
      Mr
    </label>
    <label>
      <input type="radio" name="title" value="mrs">
      Mrs
    </label>
    <label>
      <input type="radio" name="title" value="miss">
      Miss
    </label>
  </p>
  <p>
    <label>Имя</label><br>
    <input type="text" name="first_name">
  </p>
  <p>
    <label>Фамилия</label><br>
    <input type="text" name="last_name">
  </p>
  <p>
    <label>Электронная почта</label><br>
    <input type="email" name="email" required>
  </p>
  <p>
    <label>Номер телефона</label><br>
    <input type="tel" name="phone">
  </p>
  <p>
    <label>Пароль</label><br>
    <input type="password" name="password">
  </p>
  <p>
    <label>Страна</label><br>
    <select>
      <option>Китай</option>
      <option>Индия</option>
      <option>США</option>
      <option>Индонезия</option>
      <option>Бразилия</option>
    </select>
  </p>
  <p>
    <label>
      <input type="checkbox" value="terms">
      Я соглашаюсь с <a href="/terms">условиями и положениями</a>
    </label>
  </p>
  <p>
    <button>Зарегистрироваться</button>
    <button type="reset">Сброс формы</button>
  </p>
</form></div>
          <div id="form-example-0-code" class="example-code">{% highlight html %}<form action="/signup" method="post">
  <p>
    <label>Титул</label><br>
    <label>
      <input type="radio" name="title" value="mr">
      Mr
    </label>
    <label>
      <input type="radio" name="title" value="mrs">
      Mrs
    </label>
    <label>
      <input type="radio" name="title" value="miss">
      Miss
    </label>
  </p>
  <p>
    <label>Имя</label><br>
    <input type="text" name="first_name">
  </p>
  <p>
    <label>Фамилия</label><br>
    <input type="text" name="last_name">
  </p>
  <p>
    <label>Электронная почта</label><br>
    <input type="email" name="email" required>
  </p>
  <p>
    <label>Номер телефона</label><br>
    <input type="tel" name="phone">
  </p>
  <p>
    <label>Пароль</label><br>
    <input type="password" name="password">
  </p>
  <p>
    <label>Страна</label><br>
    <select>
      <option>Китай</option>
      <option>Индия</option>
      <option>США</option>
      <option>Индонезия</option>
      <option>Бразилия</option>
    </select>
  </p>
  <p>
    <label>
      <input type="checkbox" value="terms">
      Я соглашаюсь с <a href="/terms">условиями и положениями</a>
    </label>
  </p>
  <p>
    <button>Зарегистрироваться</button>
    <button type="reset">Сброс формы</button>
  </p>
</form>{% endhighlight %}</div>
        </article>
      </div>

    <article id="form-action" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="action">
            action
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, по какому URL-адресу передаётся информация с формы.</p>
        </div>
      </header>

      <div class="attribute-values">
          <article id="form-action-contact" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать action=&quot;/contact&quot;" data-clipboard-text="action=&quot;/contact&quot;">
                      "/contact"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>относительный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  action="/contact"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-action-siteurlcontact" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать action=&quot;{{site.url}}/contact&quot;" data-clipboard-text="action=&quot;{{site.url}}/contact&quot;">
                      "{{site.url}}/contact"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>абсолютный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  action="{{site.url}}/contact"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-method" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="method">
            method
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет HTTP метод, который используется при отправке формы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="form-method-post" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать method=&quot;post&quot;" data-clipboard-text="method=&quot;post&quot;">
                      "post"
                  </code>
                </h4>
              <div class="value-description">
                <p>Информация с формы отправляется на сервер как часть <strong>тела запроса</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  method="post"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-method-get" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать method=&quot;get&quot;" data-clipboard-text="method=&quot;get&quot;">
                      "get"
                  </code>
                </h4>
              <div class="value-description">
                <p>Информация с формы отправляется на сервер в виде <strong>параметров URL-адреса</strong>: <code>/contact?first_name=Alex&amp;last_name=Smith</code>.</p>
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  method="get"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-name" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Имя формы при отправке на сервер. Используется, когда на одной и той же веб-странице присутствуют несколько форм.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="form-name-sign_up_form" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;sign_up_form&quot;" data-clipboard-text="name=&quot;sign_up_form&quot;">
                      "sign_up_form"
                  </code>
                </h4>
              <div class="value-description">
                <p>Имя должно быть уникальным в пределах содержимого всей веб-страницы.</p>
<p>Может содержать только алфавитно-цифровые символы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые особые символы как <code>-</code> <code>_</code>… но не пробелы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  name="sign_up_form"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-autocomplete" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autocomplete">
            autocomplete
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, может ли браузер автоматически заполнять все элементы управления формы.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="form-autocomplete-off" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать autocomplete=&quot;off&quot;" data-clipboard-text="autocomplete=&quot;off&quot;">
                      "off"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер <strong>отключит</strong> функции автозаполнения. Однако это можно переопределить для каждого элемента индивидуально.</p>
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  autocomplete="off"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-autocomplete-on" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать autocomplete=&quot;on&quot;" data-clipboard-text="autocomplete=&quot;on&quot;">
                      "on"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер <strong>включит</strong> функции автозаполнения. Однако это можно переопределить для каждого элемента индивидуально.</p>
<p>Попробуйте нажать &quot;стрелку вниз&quot; в этом поле. Оно покажет ранее введенные вами адреса электронной почты.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  autocomplete="on"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-target" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="target">
            target
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет в какой вкладке или окне покажется ссылка.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="form-target-_blank" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_blank&quot;" data-clipboard-text="target=&quot;_blank&quot;">
                      "_blank"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в новом окне браузера, которое обычно <strong>новая вкладка</strong>.</p>
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  href="https://atomcss.ru" target="_blank"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-target-_self" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_self&quot;" data-clipboard-text="target=&quot;_self&quot;">
                      "_self"
                  </code>
                </h4>
              <div class="value-description">
                <p>Окрывает в текущей вкладке.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  href="https://atomcss.ru" target="_self"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-target-_parent" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_parent&quot;" data-clipboard-text="target=&quot;_parent&quot;">
                      "_parent"
                  </code>
                </h4>
              <div class="value-description">
                <p>Окрывает в родительском окне браузера, используйте <code>_self</code> если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  href="https://atomcss.ru" target="_parent"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-target-_top" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_top&quot;" data-clipboard-text="target=&quot;_top&quot;">
                      "_top"
                  </code>
                </h4>
              <div class="value-description">
                <p>Окрывает в верхнем окне браузера, используйте <code>_self</code> если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  href="https://atomcss.ru" target="_top"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-enctype" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="enctype">
            enctype
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">MIME-тип</a> информации, отправляемой на сервер. Работает только если метод <code>POST</code>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="form-enctype-applicationx-www-form-urlencoded" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать enctype=&quot;application/x-www-form-urlencoded&quot;" data-clipboard-text="enctype=&quot;application/x-www-form-urlencoded&quot;">
                      "application/x-www-form-urlencoded"
                  </code>
                </h4>
              <div class="value-description">
                  <strong class="value-is-default">Default.</strong>
                <p>Значение <strong>по умолчанию</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  enctype="application/x-www-form-urlencoded"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-enctype-textplain" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать enctype=&quot;text/plain&quot;" data-clipboard-text="enctype=&quot;text/plain&quot;">
                      "text/plain"
                  </code>
                </h4>
              <div class="value-description">
                <p>Для обычного текста в HTML5.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  enctype="text/plain"><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
          <article id="form-enctype-multipartform-data" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать enctype=&quot;multipart/form-data&quot;" data-clipboard-text="enctype=&quot;multipart/form-data&quot;">
                      "multipart/form-data"
                  </code>
                </h4>
              <div class="value-description">
                <p>Нужен когда используется  элемент <code>&lt;input type=&quot;file&quot;&gt;</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  enctype="multipart/form-data"><label>Отправить</label><br><input type="file"></form></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="form-novalidate" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="novalidate">
            novalidate
          </code>
        </h3>
        <div class="attribute-description">
          <p>Говорит браузеру не проверять форму при отправке.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="form-novalidate-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><form  novalidate><label>Email</label><br><input type="email" name="email" placeholder="e.g. alex@smith.com"> <button>Ok</button></form></div>
            </aside>
          </article>
      </div>
    </article>
</section>

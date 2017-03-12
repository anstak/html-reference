---
layout: single
elementName: textarea
---

<section id="textarea" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/textarea/" data-element-name="textarea" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="textarea">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/textarea" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#textarea">
        <span>#</span>
        textarea
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>многострочный текстовый элемент управления</strong> в пределах веб-формы.</p>

    </div>
  </header>


    <article id="textarea-name" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="name">
            name
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет уникальный идентификатор для <code>&lt;textarea&gt;</code> в пределах формы. Это позволяет серверу получать доступ к значению каждого элемента <code>&lt;textarea&gt;</code> при его отправке.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-name-message" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать name=&quot;message&quot;" data-clipboard-text="name=&quot;message&quot;">
                      "message"
                  </code>
                </h4>
              <div class="value-description">
                <p>Значение имени должно быть уникальным в пределах содержимого контейнера элемента <code>&lt;form&gt;</code>.</p>
<p>Может содержать только алфавитно-цифровые символы: <code>a-z</code> <code>A-Z</code> <code>0-9</code> и некоторые специальные символы как <code>-</code> <code>_</code>… но не пробелы.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-autocomplete" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autocomplete">
            autocomplete
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, может ли браузер автозаполнять область текста..</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-autocomplete-off" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать autocomplete=&quot;off&quot;" data-clipboard-text="autocomplete=&quot;off&quot;">
                      "off"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер <strong>отключит</strong> функцию автозаполнения.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message" autocomplete="off"></textarea></div>
            </aside>
          </article>
          <article id="textarea-autocomplete-on" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать autocomplete=&quot;on&quot;" data-clipboard-text="autocomplete=&quot;on&quot;">
                      "on"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер <strong>включит</strong> функцию автозаполнения.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-minlength" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="minlength">
            minlength
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет минимальное количество символов, которое требуется для <code>&lt;textarea&gt;</code>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-minlength-15" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать minlength=&quot;15&quot;" data-clipboard-text="minlength=&quot;15&quot;">
                      "15"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать только <strong>целые числа</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-maxlength" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="maxlength">
            maxlength
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет максимально допустимое количество символов в <code>&lt;textarea&gt;</code>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-maxlength-140" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать maxlength=&quot;140&quot;" data-clipboard-text="maxlength=&quot;140&quot;">
                      "140"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать только <strong>целые числа</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-placeholder" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="placeholder">
            placeholder
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет невыделяемый текст-заполнитель, который виден, только когда текстовая область пуста.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-placeholder-eg-hello-my-name-is-alex" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать placeholder=&quot;Расскажите о себе&quot;" data-clipboard-text="placeholder=&quot;Расскажите о себе&quot;">
                      "Расскажите о себе"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете оставить подсказку для пользователя, что ожидается вводить для текстового поля.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Расскажите о себе" name="message" autocomplete="on" minlength="15" maxlength="140"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-cols" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="cols">
            cols
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет количество столбцов.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-cols-40" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать cols=&quot;40&quot;" data-clipboard-text="cols=&quot;40&quot;">
                      "40"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать только <strong>целые числа</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="10" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-rows" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="rows">
            rows
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет количество строк.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-rows-5" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать rows=&quot;5&quot;" data-clipboard-text="rows=&quot;5&quot;">
                      "5"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать только <strong>целые числа</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-wrap" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="wrap">
            wrap
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет, как текст должен быть упакован.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-wrap-hard" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать wrap=&quot;hard&quot;" data-clipboard-text="wrap=&quot;hard&quot;">
                      "hard"
                  </code>
                </h4>
              <div class="value-description">
                <p>Текст всегда будет переноситься в зависимости от значения <code>cols</code>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="hard"></textarea></div>
            </aside>
          </article>
          <article id="textarea-wrap-soft" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать wrap=&quot;soft&quot;" data-clipboard-text="wrap=&quot;soft&quot;">
                      "soft"
                  </code>
                </h4>
              <div class="value-description">
                <p>Текст будет переноситься только при необходимости.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft"></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-disabled" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="disabled">
            disabled
          </code>
        </h3>
        <div class="attribute-description">
          <p>Отключает область текста.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-disabled-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft" disabled></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-required" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="required">
            required
          </code>
        </h3>
        <div class="attribute-description">
          <p>Сообщает браузеру, что это текстовое поле является <strong>обязательным</strong>.Если оставить его пустым, появится предупреждение..</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-required-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft" disabled required></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-autofocus" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="autofocus">
            autofocus
          </code>
        </h3>
        <div class="attribute-description">
          <p>Фокусирует пользователя на данное текстовое поле при загрузке веб-страницы.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-autofocus-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft" disabled required></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-readonly" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="readonly">
            readonly
          </code>
        </h3>
        <div class="attribute-description">
          <p>Превращает текстовую область в элемент, доступный только для чтения.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-readonly-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft" disabled required readonly></textarea></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="textarea-spellcheck" class="attribute attribute--novalue">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="spellcheck">
            spellcheck
          </code>
        </h3>
        <div class="attribute-description">
          <p>Включает у браузера проверку правописания.</p>

            <strong class="attribute-is-novalue">Аттрибут не обязателен.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="textarea-spellcheck-undefined" class="value">
            <header class="value-header">
              <div class="value-description">
                
              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><textarea  columns="40" rows="5" placeholder="Привет, моё имя Алексей" name="message" autocomplete="on" minlength="15" maxlength="140" cols="40" wrap="soft" disabled required readonly spellcheck></textarea></div>
            </aside>
          </article>
      </div>
    </article>
</section>

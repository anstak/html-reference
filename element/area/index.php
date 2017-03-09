---
layout: single
elementName: area
---

<section id="area" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/area/" data-element-name="area" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="area">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/area" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#area">
        <span>#</span>
        area
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет интерактивную область в пределах тэга <code>map</code>.</p>

    </div>
  </header>

      <div id="area-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#area-example-0-code">Копировать</a>
        </p>
        <article class="example-preview">
            <div class="example-output"><img src="{{site.url}}/images/world-continents.png" width="320" height="160" orgwidth="320" orgheight="160" usemap="#world-continents">
<map name="world-continents">
  <area title="North America" href="https://en.wikipedia.org/wiki/North_America" shape="poly" coords="48,89,67,69,77,49,140,0,68,0,6,10,4,31,16,69">
  <area title="South America" href="https://en.wikipedia.org/wiki/South_America" shape="poly" coords="48,88,61,74,119,99,95,160,66,159">
  <area title="Europe" href="https://en.wikipedia.org/wiki/Europe" shape="poly" coords="124,49,145,46,158,50,187,43,198,6,146,1,115,21">
  <area title="Africa" href="https://en.wikipedia.org/wiki/Africa" shape="poly" coords="121,53,140,47,169,51,186,77,196,80,188,137,156,136,138,97,118,86">
  <area title="Asia" href="https://en.wikipedia.org/wiki/Asia" shape="poly" coords="166,50,184,77,201,74,215,91,258,108,263,87,283,74,297,8,192,3,191,29,187,46,170,42">
  <area title="Australia" href="https://en.wikipedia.org/wiki/Australia_(continent)" shape="poly" coords="257,107,263,85,314,89,316,137,294,151,249,132,248,114">
</map>
</div>
          <div id="area-example-0-code" class="example-code">{% highlight html %}<img src="{{site.url}}/images/world-continents.png" width="320" height="160" orgwidth="320" orgheight="160" usemap="#world-continents">
<map name="world-continents">
  <area title="North America" href="https://en.wikipedia.org/wiki/North_America" shape="poly" coords="48,89,67,69,77,49,140,0,68,0,6,10,4,31,16,69">
  <area title="South America" href="https://en.wikipedia.org/wiki/South_America" shape="poly" coords="48,88,61,74,119,99,95,160,66,159">
  <area title="Europe" href="https://en.wikipedia.org/wiki/Europe" shape="poly" coords="124,49,145,46,158,50,187,43,198,6,146,1,115,21">
  <area title="Africa" href="https://en.wikipedia.org/wiki/Africa" shape="poly" coords="121,53,140,47,169,51,186,77,196,80,188,137,156,136,138,97,118,86">
  <area title="Asia" href="https://en.wikipedia.org/wiki/Asia" shape="poly" coords="166,50,184,77,201,74,215,91,258,108,263,87,283,74,297,8,192,3,191,29,187,46,170,42">
  <area title="Australia" href="https://en.wikipedia.org/wiki/Australia_(continent)" shape="poly" coords="257,107,263,85,314,89,316,137,294,151,249,132,248,114">
</map>
{% endhighlight %}</div>
        </article>
      </div>

    <article id="area-title" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="title">
            title
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет название области.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="area-title-north-america" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать title=&quot;North America&quot;" data-clipboard-text="title=&quot;North America&quot;">
                      "North America"
                  </code>
                </h4>
              <div class="value-description">
                <p>Название появится при наведении курсора на область.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  title="North America"></area></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="area-shape" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="shape">
            shape
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет форму области.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="area-shape-rect" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать shape=&quot;rect&quot;" data-clipboard-text="shape=&quot;rect&quot;">
                      "rect"
                  </code>
                </h4>
              <div class="value-description">
                <p>Форма является прямоугольной, и требует 4 координаты.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  shape="rect"></area></div>
            </aside>
          </article>
          <article id="area-shape-circle" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать shape=&quot;circle&quot;" data-clipboard-text="shape=&quot;circle&quot;">
                      "circle"
                  </code>
                </h4>
              <div class="value-description">
                <p>Форма является кругом и требует 2 координаты и 1 радиус.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  shape="circle"></area></div>
            </aside>
          </article>
          <article id="area-shape-polygon" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать shape=&quot;polygon&quot;" data-clipboard-text="shape=&quot;polygon&quot;">
                      "polygon"
                  </code>
                </h4>
              <div class="value-description">
                <p>Форма является многоугольником с неограниченным количеством точек .</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  shape="polygon"></area></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="area-coords" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="coords">
            coords
          </code>
        </h3>
        <div class="attribute-description">
          <p> Определяет координаты связанные с формой.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="area-coords-116104234154" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать coords=&quot;116,104,234,154&quot;" data-clipboard-text="coords=&quot;116,104,234,154&quot;">
                      "116,104,234,154"
                  </code>
                </h4>
              <div class="value-description">
                <p>Элемент <code>rect</code> требует две пары координат <code>x1,y1,x2,y2</code>, где первая определяет <strong>верхний левый</strong> угол, и вторая - <strong>нижний правый</strong> угол.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  coords="116,104,234,154"></area></div>
            </aside>
          </article>
          <article id="area-coords-508020" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать coords=&quot;50,80,20&quot;" data-clipboard-text="coords=&quot;50,80,20&quot;">
                      "50,80,20"
                  </code>
                </h4>
              <div class="value-description">
                <p>Элемент<code>circle</code> требует парные координаты и радиус – <code>x,y,r</code>.Координаты (x, y) определяют <strong>центр</strong> круга.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  coords="50,80,20"></area></div>
            </aside>
          </article>
          <article id="area-coords-198374243303428387361624296624" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать coords=&quot;198,374,243,303,428,387,361,624,296,624&quot;" data-clipboard-text="coords=&quot;198,374,243,303,428,387,361,624,296,624&quot;">
                      "198,374,243,303,428,387,361,624,296,624"
                  </code>
                </h4>
              <div class="value-description">
                <p>Элемент<code>polygon</code> требует набор <code>x,y</code> координат.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  coords="198,374,243,303,428,387,361,624,296,624"></area></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="area-href" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="href">
            href
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет ссылку, на которую при клике на область, будет осуществляться переход.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="area-href-httphtmlreferenceio" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;https://atomcss.ru&quot;" data-clipboard-text="href=&quot;https://atomcss.ru&quot;">
                      "https://atomcss.ru"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете переходить по <strong>абсолютному</strong> URL адресу.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="https://atomcss.ru"></area></div>
            </aside>
          </article>
          <article id="area-href-elementdiv" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;/element/div&quot;" data-clipboard-text="href=&quot;/element/div&quot;">
                      "/element/div"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете переходить по URL адресу <strong>относительно</strong> корневого домена.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="/element/div"></area></div>
            </aside>
          </article>
          <article id="area-href-footer" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;#footer&quot;" data-clipboard-text="href=&quot;#footer&quot;">
                      "#footer"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете выбрать элемент в пределах <em>одной и той же</em> страницы. На примере, мы выбираем элемент <code>&lt;div id=&quot;footer&quot;&gt;</code></p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="#footer">Footer</area></div>
            </aside>
          </article>
          <article id="area-href-mailtoalexsmithcom" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать href=&quot;mailto:alex@smith.com&quot;" data-clipboard-text="href=&quot;mailto:alex@smith.com&quot;">
                      "mailto:alex@smith.com"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <code>mailto</code> протокол. При клике на область откроется ваш почтовый клиент.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="mailto:alex@smith.com">Свяжитесь со мной</area></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="area-target" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="target">
            target
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет в какой вкладке или окне появится нажатая область .</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="area-target-_blank" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_blank&quot;" data-clipboard-text="target=&quot;_blank&quot;">
                      "_blank"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в новом окне браузера, которое обычно является <strong>новой вкладкой</strong>.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="https://atomcss.ru" target="_blank"></area></div>
            </aside>
          </article>
          <article id="area-target-_self" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_self&quot;" data-clipboard-text="target=&quot;_self&quot;">
                      "_self"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в текущей вкладке.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="https://atomcss.ru" target="_self"></area></div>
            </aside>
          </article>
          <article id="area-target-_parent" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_parent&quot;" data-clipboard-text="target=&quot;_parent&quot;">
                      "_parent"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в родительском всплывающем окне, используйте <code>_self</code>. если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="https://atomcss.ru" target="_parent"></area></div>
            </aside>
          </article>
          <article id="area-target-_top" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать target=&quot;_top&quot;" data-clipboard-text="target=&quot;_top&quot;">
                      "_top"
                  </code>
                </h4>
              <div class="value-description">
                <p>Открывает в верхнем всплывающем окне, используйте  <code>_self</code> если такого нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><area  href="https://atomcss.ru" target="_top"></area></div>
            </aside>
          </article>
      </div>
    </article>
</section>
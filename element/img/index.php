---
layout: single
elementName: img
---

<section id="img" class="element">
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
      <a class="element-links-direct" href="{{site.url}}/element/img/" data-element-name="img" data-tooltip="Ссылка на отдельную страницу с тегом">Ссылка</a>
      <a class="element-share" data-tooltip="Поделиться в соц. сетях" data-element-name="img">Поделиться</a>
      <a target="_blank" href="https://developer.mozilla.org/en/docs/Web/HTML/Element/img" data-tooltip="Посмотреть в Mozilla Developer Network" rel="external">MDN</a>
    </nav>
    <h2 translate="no" class="notranslate element-name">
      <a href="#img">
        <span>#</span>
        img
      </a>
    </h2>
    <div class="element-description">
      <p>Определяет <strong>картинку</strong>, вставленную на веб-страницу.</p>

    </div>
  </header>

      <div id="img-example-0" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#img-example-0-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><img src="{{site.url}}/images/sunset.jpg" alt="Picture of a Ha Long Bay sunset"></div>
          <div id="img-example-0-code" class="example-code">{% highlight html %}<img src="{{site.url}}/images/sunset.jpg" alt="Picture of a Ha Long Bay sunset">{% endhighlight %}</div>
        </article>
      </div>
      <div id="img-example-1" class="example">
        <p class="example-label">
          <strong>Пример:</strong>
          <a class="example-clipboard" data-tooltip="Скопировать код" data-clipboard-target="#img-example-1-code">Копировать</a>
        </p>
        <article class="example-preview" translate="no">
            <div class="example-output"><!-- Для "чувствительных" изображений, используйте "srcset" и "sizes" -->

<img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px"></div>
          <div id="img-example-1-code" class="example-code">{% highlight html %}<!-- Для "чувствительных" изображений, используйте "srcset" и "sizes" -->

<img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px">{% endhighlight %}</div>
        </article>
      </div>

    <article id="img-src" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="src">
            src
          </code>
        </h3>
        <div class="attribute-description">
          <p>URL-адрес картинки.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="img-src-imagestiramisujpg" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;/images/tiramisu.jpg&quot;" data-clipboard-text="src=&quot;/images/tiramisu.jpg&quot;">
                      "/htmlref/images/tiramisu.jpg"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>относительный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img  src="{{site.url}}/images/tiramisu.jpg"></img></div>
            </aside>
          </article>
          <article id="img-src-siteurlimagestrafficjpg" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать src=&quot;{{site.url}}/images/traffic.jpg&quot;" data-clipboard-text="src=&quot;{{site.url}}/images/traffic.jpg&quot;">
                      "{{site.url}}/images/traffic.jpg"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы помжете использовать <strong>абсолютный</strong> URL-адрес.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img  src="{{site.url}}/images/traffic.jpg"></img></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="img-alt" class="attribute attribute--required">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="alt">
            alt
          </code>
        </h3>
        <div class="attribute-description">
          <p>Альтернативный текст, который служит для описания картинки, будет виден если картинка недоступна.Используется программами чтения с экрана.</p>

            <strong class="attribute-is-required">Обязательный аттрибут.</strong>
        </div>
      </header>

      <div class="attribute-values">
          <article id="img-alt-picture-of-a-man-standing-in-front-of-the-dragons-pearl-boat" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать alt=&quot;Picture of a man standing in front of the Dragon&#x27;s Pearl boat&quot;" data-clipboard-text="alt=&quot;Picture of a man standing in front of the Dragon&#x27;s Pearl boat&quot;">
                      "Изображение человека, стоящего перед лодкой Дракона"
                      
                  </code>
                </h4>
              <div class="value-description">
                <p>Описывает картинку если её нет.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img  src="{{site.url}}/images/boat.jpg" alt="Picture of a man standing in front of the Dragon's Pearl boat"></img></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="img-srcset" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="srcset">
            srcset
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет список <em>разных</em> <strong>источников</strong> для <em>одного и того же</em> изображения. Браузер выберет наиболее подходящий.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="img-srcset-imagessunset-2xjpg-2x" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать srcset=&quot;/images/sunset-@2x.jpg 2x&quot;" data-clipboard-text="srcset=&quot;/images/sunset-@2x.jpg 2x&quot;">
                      "/htmlref/images/sunset-@2x.jpg 2x"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете определить <strong>дескриптор плотности пикселей</strong> например <code>2x</code>. В этом случае, <code>sunset-@2x.jpg</code> картинка будет ширины в <em>720px</em>.</p>

{% highlight html %}
<img src="{{site.url}}/images/sunset.jpg"
     srcset="/htmlref/images/sunset-@2x.jpg 2x"
     alt="Закат на заливе Халонг-Бей">
{% endhighlight %}
<p>Браузер использует <code>sunset.jpg</code> или <code>sunset-@2x.jpg</code> в зависимости от доступного места на веб-странице, плотности пикселей, и так далее.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img src="{{site.url}}/images/sunset.jpg"
     srcset="/htmlref/images/sunset-@2x.jpg 2x"
     alt="Закат на заливе Халонг-Бей"></div>
            </aside>
          </article>
          <article id="img-srcset-imagessunset-360jpg-360w-imagessunset-720jpg-720w-imagessunset-1440jpg-1440w" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать srcset=&quot;/images/sunset-360.jpg 360w, /htmlref/images/sunset-720.jpg 720w, /htmlref/images/sunset-1440.jpg 1440w&quot;" data-clipboard-text="srcset=&quot;/images/sunset-360.jpg 360w, /htmlref/images/sunset-720.jpg 720w, /htmlref/images/sunset-1440.jpg 1440w&quot;">
                      "/htmlref/images/sunset-360.jpg 360w,<br> /htmlref/images/sunset-720.jpg 720w,<br> /htmlref/images/sunset-1440.jpg 1440w"
                  </code>
                </h4>
              <div class="value-description">
                <p>Вы можете использовать <strong>дескриптор ширины</strong> например: <code>360w</code>.Это значение делится на один из исходных размеров (определено в аттрибуте <code>sizes</code>) для получения <strong>плотности пикселей</strong>.</p>

{% highlight html %}
<img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px">
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px"></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="img-sizes" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="sizes">
            sizes
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет список разных источников с <strong>размерами</strong> картинки. Вы можете комбинировать каждый из них с помощью <strong>медиа-запросов</strong>.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="img-sizes-min-width-800px-1440px-720px" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать sizes=&quot;(min-width: 800px) 1440px, 720px&quot;" data-clipboard-text="sizes=&quot;(min-width: 800px) 1440px, 720px&quot;">
                      "(min-width: 800px) 1440px, 720px"
                  </code>
                </h4>
              <div class="value-description">
                <p>Браузер будет использовать картинку размером в <code>1440px</code> (определяется в <code>srcset</code>) если область просмотра больше чем 800px.<br>В противном случае он будет использовать картинку в <code>720px</code>.</p>

{% highlight html %}
<img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px">
{% endhighlight %}

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img src="{{site.url}}/images/sunset-360.jpg"
  alt="Закат на заливе Халонг-Бей"
  srcset="/htmlref/images/sunset-360.jpg 360w,
          /htmlref/images/sunset-720.jpg 720w,
          /htmlref/images/sunset-1440.jpg 1440w>"
  sizes="(min-width: 800px) 720px, 360px"></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="img-height" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="height">
            height
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет высоту картинки.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="img-height-240" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать height=&quot;240&quot;" data-clipboard-text="height=&quot;240&quot;">
                      "240"
                  </code>
                </h4>
              <div class="value-description">
                <p>Высота в пикселях.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img  src="{{site.url}}/images/boat.jpg" height="240"></img></div>
            </aside>
          </article>
      </div>
    </article>
    <article id="img-width" class="attribute">
      <header class="attribute-header">
        <h3 class="attribute-name">
          <code class="tag" data-tooltip="Скопировать" data-clipboard-text="width">
            width
          </code>
        </h3>
        <div class="attribute-description">
          <p>Определяет ширину картинки.</p>

        </div>
      </header>

      <div class="attribute-values">
          <article id="img-width-120" class="value">
            <header class="value-header">
                <h4 class="value-name">
                  <code class="tag" data-tooltip="Скопировать width=&quot;120&quot;" data-clipboard-text="width=&quot;120&quot;">
                      "120"
                  </code>
                </h4>
              <div class="value-description">
                <p>Ширина в пикселях.</p>

              </div>
            </header>
            <aside class="value-preview">
              <div class="value-output"><img  src="{{site.url}}/images/boat.jpg" width="120"></img></div>
            </aside>
          </article>
      </div>
    </article>
</section>

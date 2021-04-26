export const customTypeset = ({ specimens, sampleText}) => {
  const wrapper = document.createElement("div");
  wrapper.className = "typeset";

  specimens.forEach((specimen) => {
    const typePreview = document.createElement("p");
    typePreview.className = specimen.className

    const fontSizeText = specimen.fontSize ? specimen.fontSize + '/' : ''
    const lineHeightText = specimen.fontSize ? specimen.fontSize : ''

    wrapper.insertAdjacentHTML(
      "beforeend",
      `
      <div class="typeset__specimen">
          <div class="typeset__specimen__specs">
              <code class="typeset__specimen__classname">${specimen.className}</code>
              <p class="typeset__specimen__size">${fontSizeText}${lineHeightText}</p>
          </div>
          <div class="typeset__specimen__preview">
              <p class="${specimen.className}">${specimen.sampleText || sampleText || 'Was he a beast if music could move him so?'}</h1>
          </div>
      </div>
      `
    );
  });

  return wrapper;
};

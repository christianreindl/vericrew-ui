import "./../css/main.css";
import "@iconscout/unicons/css/line.css";

export const parameters = {
  actions: { argTypesRegex: "^on[A-Z].*" },
  controls: {
    matchers: {
      color: /(background|color)$/i,
      date: /Date$/,
    },
  },
  options: {
    storySort: {
      order: ['General',  ['Getting Started', 'Colors', 'Type', 'Icon'], 'Components', ['Button', 'Input']],
    },
  },

}

export default {
  title: 'Example/Callout',
  parameters: {
    docs: {
      description: {
        component: 'some component _markdown_',
      },
    },
  },
  argTypes: {
    label: { control: 'text' },
    primary: { control: 'boolean' },
    backgroundColor: { control: 'color' },
    size: {
      control: { type: 'select', options: ['small', 'medium', 'large'] },
    },
    onClick: { action: 'onClick' },
  },
};

const Template = ({ label, primary, ...args }) => {
  return `<div style="color:${primary ? 'red' : 'blue'}">${label}</div>`;
};

export const Primary = Template.bind({});
export const Secondary = () => {return `<div style="color:red">tewtawfsdf</div>`};

/*
export const Primary = Template.bind({});
Primary.args = {
  primary: true,
  label: 'Red Text',
};

export const Secondary = Template.bind({});
Secondary.args = {
  label: 'Blue Text',
};
*/

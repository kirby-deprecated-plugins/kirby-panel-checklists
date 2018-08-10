panel.plugin('jenstornell/checklists', {
  'fields': {
    'checklist': {
      props: {
        label: String,
        message: Array
      },
      template: `
      <k-list>
        <k-list-item v-for="item in message" v-bind:class="item.color" v-bind:text="item.text" :icon="{
          type: item.icon,
        }" />
      </k-list>
      `
    }
  }
});
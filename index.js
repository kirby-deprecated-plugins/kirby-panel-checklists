panel.plugin('jenstornell/checklists', {
  'fields': {
    'checklist': {
      props: {
        label: String,
        list: Array
      },
      template: `
      <k-field :input="_uid" :label="label">
        <k-list>
          <k-list-item v-for="item in list" v-bind:class="item.color" v-bind:text="item.text" :icon="{
            type: item.icon,
          }" />
        </k-list>
      </k-field>
      `
    }
  }
});
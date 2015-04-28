# Global Templates

You can overwrite any view template by placing it in this directory. This directory
contains two sub-directories "Front" and "Back", and their represent "Frontend" &
"Backend" themes respectively, these directories mimics the "Template" directory of
any regular theme.

For example, if you want to create your own template for
`System.Admin/Dashboard/index.ctp`, then you must create your own template file at
`ROOT/templates/Back/Plugin/System/Admin/Dashboard/index.ctp`. Note that we placed
it under the `Back` subdirectory as the template belongs to Backend (see the "Admin"
prefix). Below some short examples:

- `Node.Element/render_node.ctp` -> `ROOT/templates/Front/Plugin/Node/Element/render_node.ctp`
- `User.Gateway/login.ctp` -> `ROOT/templates/Front/Plugin/User/Gateway/login.ctp`

Some templates can be shared across back and frontend, such as view-elements or
flash message templates. In this cases you can use the "Common" sub-directory:

- `QUICKAPPS_CORE/Element/layout_head.ctp` -> `ROOT/templates/Common/Element/layout_head.ctp`

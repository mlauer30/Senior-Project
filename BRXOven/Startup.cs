using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(BRXOven.Startup))]
namespace BRXOven
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}

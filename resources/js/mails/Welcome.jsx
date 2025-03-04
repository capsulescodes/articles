import { Layout, Subcopy } from '/vendor/capsulescodes/inertia-mailable/components/js/react/Layout';
import Table from '/vendor/capsulescodes/inertia-mailable/components/js/react/tags/Table';


const Welcome = ( { name } ) =>
{
    const app = process.env.VITE_APP_NAME;
    const image = 'https://raw.githubusercontent.com/capsulescodes/inertia-mailable/main/art/capsules-inertia-mailable-mail-image.png';

    return (

        <Layout>

            <div>

                <p className="text-slate-800">Hello, { name }!</p>

                <p className="pt-4 text-sm text-slate-600">This is a mail made with Laravel, Inertia and React</p>

                <Table align="center">

                    <Table align="center">

                        <Table>

                            <img className="my-4 max-w-full" src={ image } />

                        </Table>

                    </Table>

                </Table>

                <p className="pb-4 text-sm text-slate-600">Regards,</p>

                <p className="text-slate-800">{ app }</p>

            </div>

            <Subcopy>

                <p className="text-xs text-slate-600">This is a subcopy made with Laravel, Inertia and React</p>

            </Subcopy>

        </Layout>
    );
};


export default Welcome;

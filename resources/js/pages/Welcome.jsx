const Welcome = () =>
{
    const logotype = "/assets/capsules-logotype.svg";

    return (
        <div className="w-screen h-screen flex flex-col items-center justify-center text-center">

            <img className="w-24 h-24" src={ logotype } alt="Capsules Codes Logotype" />

            <h1 className="mt-4 text-6xl font-bold select-none header-mode">Capsules Codes</h1>

        </div>
    );
};


export default Welcome;
